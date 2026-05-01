package com.peachpie.avalonia.rider

import com.intellij.openapi.application.ApplicationManager
import com.intellij.openapi.project.Project
import com.intellij.openapi.startup.ProjectActivity
import com.intellij.openapi.vfs.VirtualFileManager
import com.intellij.openapi.vfs.newvfs.BulkFileListener
import com.intellij.openapi.vfs.newvfs.events.VFileEvent

class PeachpieAvaloniaStartupActivity : ProjectActivity {
    override suspend fun execute(project: Project) {
        val service = PeachpieAvaloniaIndexService.getInstance(project)
        service.refresh()

        project.messageBus.connect().subscribe(VirtualFileManager.VFS_CHANGES, object : BulkFileListener {
            override fun after(events: List<VFileEvent>) {
                if (events.any { it.path.endsWith(".peachpie-rider/index.json", ignoreCase = true) }) {
                    ApplicationManager.getApplication().invokeLater {
                        service.refresh()
                    }
                }
            }
        })
    }
}
