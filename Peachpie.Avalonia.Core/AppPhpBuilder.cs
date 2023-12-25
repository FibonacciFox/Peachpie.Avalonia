using System;
using System.Linq;
using Avalonia;
using Avalonia.Controls.ApplicationLifetimes;
using Avalonia.Logging;

namespace Peachpie.Avalonia.Core
{
    public class AppPhpBuilder
    {
        private AppBuilder _appBuilder;

        public static AppPhpBuilder Configure(string applicationType)
        {
            if (string.IsNullOrWhiteSpace(applicationType))
            {
                throw new ArgumentException("Application type must be provided.");
            }

            Type appType = Type.GetType(applicationType);
            if (appType == null)
            {
                throw new ArgumentException("Invalid application type.");
            }

            AppBuilder appBuilder = CreateAppBuilder(appType);
            return new AppPhpBuilder(appBuilder);
        }

        private static AppBuilder CreateAppBuilder(Type applicationType)
        {
            var configureMethod = typeof(AppBuilder)
                .GetMethods()
                .Where(method => method.Name == "Configure")
                .FirstOrDefault(method => method.IsGenericMethod);

            if (configureMethod == null)
            {
                throw new InvalidOperationException("Configure method not found.");
            }

            var genericConfigureMethod = configureMethod.MakeGenericMethod(applicationType);
            return (AppBuilder)genericConfigureMethod.Invoke(null, null);
        }

        private AppPhpBuilder(AppBuilder appBuilder)
        {
            _appBuilder = appBuilder;
        }

        public AppPhpBuilder UsePlatformDetect()
        {
            _appBuilder.UsePlatformDetect();
            return this;
        }

        public AppPhpBuilder SetupWithLifetime(IApplicationLifetime lifetime)
        {
            _appBuilder.SetupWithLifetime(lifetime);
            return this;
        }

        public AppPhpBuilder WithInterFont()
        {
            _appBuilder.WithInterFont();
            return this;
        }
        
        public AppPhpBuilder LogToTrace()
        {
            _appBuilder.LogToTrace();
            return this;
        }
        
    }
}