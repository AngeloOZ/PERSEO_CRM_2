
# Proyecto Perseo CRM

Este CRM esta construido en base a la plantilla de VISTRO de la cual se tiene los derechos.

Para su contrucción se está empleando el framework Laravel
## Instalación

Para la instalación del proyecto se debe contar con el gestor de paquetes NPM y Composer

```bash
  cd application
  composer install
  npm install
```
    
## Variables de entorno

To run this project, you will need to add the following environment variables to your .env file

```
# --------------------------------------------------------------------------------------------
# [NEXTLOOP NOTES]
#  The information in the file is automatically set/updated during installation setup process.
#  There is usually no need to make manual edit to this file, unless you really know what you 
#  are doing. 
# ---------------------------------------------------------------------------------------------


# --------------------------------------------------------------------------------------------
# [URL]
#  Change this to your base url of your dashboard. (e.g. https://clients.example.com )
# ---------------------------------------------------------------------------------------------
APP_URL=http://127.0.0.1


# --------------------------------------------------------------------------------------------
# [APPLICATION DEBUGGING]
# Debug levels (in their order, below) - only the specifed log levels and ABOVE will be logged
# [bug levels] 
#    - emergency, alert, critical, error, warning, notice, info, debug
# [best settings]
#    - in development (APP_DEBUG=true, APP_LOG_LEVEL=debug)
#    - in production, (APP_DEBUG=true, APP_LOG_LEVEL=error)
# ---------------------------------------------------------------------------------------------
APP_DEBUG=true
APP_LOG_LEVEL=error


# --------------------------------------------------------------------------------------------
# [APPLICATION DEBUGGING]
# Show a debugging tool bar at the bottom of the screen. 
# NOTE: APP_DEBUG must also be set to 'true' for the debug bar to show
# NOTE: Polling (javascript) is disabled when APP_DEBUG_TOOLBAR is set to false
# ---------------------------------------------------------------------------------------------
APP_DEBUG_TOOLBAR=false


# --------------------------------------------------------------------------------------------
# [APPLICATION JAVASCRIPT DEBUG]
# Show javascript debug console output
# ---------------------------------------------------------------------------------------------
APP_DEBUG_JAVASCRIPT=false


# --------------------------------------------------------------------------------------------
# [DATABASE INFORMATION]
#  When you first install Grow CRM, this information is automatically updated via the setup
#  wizard. You will only need to change this information manually, if you have since updated
#  your database details
# ---------------------------------------------------------------------------------------------
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=


# --------------------------------------------------------------------------------------------
# [DATABASE INFORMATION]
#  You do not need to change this value here. You can set this information inside the dashboad
# ---------------------------------------------------------------------------------------------
APP_NAME="PERSEO CRM"


# --------------------------------------------------------------------------------------------
# [APPLICATION ENVIRONMENT]
#   - This should be set to 'production' if your dashboard is in live production
#   - This should be set to 'local' if you testing and have not gone live
# ---------------------------------------------------------------------------------------------
APP_ENV=production


# --------------------------------------------------------------------------------------------
# [MAIL DRIVER]
#  You do not need to change this value here. It is set via the Dashboard's > Settings section
# ---------------------------------------------------------------------------------------------
MAIL_DRIVER=this-in-the-dashboard
MAIL_HOST=set-this-in-the-dashboard
MAIL_PORT=set-this-in-the-dashboard
MAIL_USERNAME=set-this-in-the-dashboard
MAIL_PASSWORD=set-this-in-the-dashboard
MAIL_ENCRYPTION=null


# --------------------------------------------------------------------------------------------
# [APPLICATION KEY]
# ---------------------------------------------------------------------------------------------
APP_KEY=base64:aNBBQ58FMwnQzbg8Uk9Z/Tt1nDi1d7LisxsyUeViHw0=


# --------------------------------------------------------------------------------------------
# [CACHE & SESSIONS]
#  You do not need to change this value here. You can set this information inside the dashboad
#  Session lifetime is in minutes. The default set here is (4320 minutes) 72Hrs. After this
#  period of inactivity, the user will be logged out
# ---------------------------------------------------------------------------------------------
BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=4320
QUEUE_DRIVER=sync


# --------------------------------------------------------------------------------------------
# [REDIS]
#  (unsupported) Set this only if you the technical knowledge and require this feature
# ---------------------------------------------------------------------------------------------
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379


# --------------------------------------------------------------------------------------------
# [PUSHER]
#  (unsupported) Set this, only if you the technical knowledge and require this feature
# ---------------------------------------------------------------------------------------------
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=


# --------------------------------------------------------------------------------------------
# [APPLICATION MODE]
# Grow CRM updates server. You should not usually need to change this value.
# [NOTE] some older version of the CRM where checking on http:// instead of https://
# ---------------------------------------------------------------------------------------------
APP_UPDATES_SERVER=https://updates.growcrm.io/updates


# --------------------------------------------------------------------------------------------
# [APPLICATION MODE]
# If the application is in demo mode, some features are disabled.
# ---------------------------------------------------------------------------------------------
APP_DEMO_MODE=false


# --------------------------------------------------------------------------------------------
# [APPLICATION MODE]
# The version at the point of installation. You should not usually need to change this value.
# ---------------------------------------------------------------------------------------------
APP_INSTALLED_VERSION=2.3


# --------------------------------------------------------------------------------------------
# [FORCE SSL]
# Change this value if you are having an problem with SSL
# ---------------------------------------------------------------------------------------------
ENFORCE_SSL=false


# --------------------------------------------------------------------------------------------
# [SETUP-STATUS]
# Do not change this value
# ---------------------------------------------------------------------------------------------
SETUP_STATUS=

#endW
```

