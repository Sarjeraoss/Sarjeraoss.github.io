<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "sql12.freesqldatabase.com";
    public $DB_USER     = "sql12276976";
    public $DB_PASSWORD = "NXf428UDck";
    public $DB_NAME     = "sql12276976";

    /* FCM key for notification */
    public $FCM_KEY     = "AIzaSyB9WsuT3SlssJVjAlfXd0d6QliK6mlMsDs";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "DjB9E1ing2HHvQNDtBlYxdl85iNDI6FxagYziqXOiQ4ykjrSg9CtqZCPKOY3N5XtUJ2zYnpYUWA0wWN1B9HhW5IbqZyMr5enwMaC";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "sample@peygreatz.com";
    public $SMTP_PASSWORD   = "testing";
    public $SMTP_HOST       = "mail.peygreatz.com";
    public $SMTP_PORT       = 562;

    // for administrator & for buyer
    public $SUBJECT_EMAIL_NEW_ORDER = "Market New Order";
    public $TITLE_REPORT_NEW_ORDER  = "Market New Order";

    // for buyer
    public $SUBJECT_EMAIL_ORDER_PROCESSED   = "Order PROCESSED";
    public $TITLE_REPORT_ORDER_PROCESSED    = "Order Status Change to PROCESSED";

    public $SUBJECT_EMAIL_ORDER_UPDATED     = "Order Data Updated";
    public $TITLE_REPORT_ORDER_UPDATED      = "Order Data Updated By Admin";
}

?>