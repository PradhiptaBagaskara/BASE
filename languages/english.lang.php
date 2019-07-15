<?php
/*******************************************************************************
** Basic Analysis and Security Engine (BASE)
** Copyright (C) 2004 BASE Project Team
** Copyright (C) 2000 Carnegie Mellon University
**
** (see the file 'base_main.php' for license details)
**
** Project Leads: Kevin Johnson <kjohnson@secureideas.net>
** Built upon work by Roman Danyliw <rdd@cert.org>, <roman@danyliw.com>
**
** Purpose: English language file
**      To translate into another language, copy this file and
**          translate each variable into your chosen language.
**          Leave any variable not translated so that the system will have
**          something to display.
********************************************************************************
** Authors:
********************************************************************************
** Kevin Johnson <kjohnson@secureideas.net>
** Joel Esler <joelesler@users.sourceforge.net>
********************************************************************************
*/

$UI_Spacing = 1; // Inter Character Spacing.
$UI_ILC = 'en'; // ISO 639-1 Language Code.
$UI_IRC = ''; // Region Code.
// Locales.
$UI_Locales = array( 'eng_ENG.ISO8859-1', 'eng_ENG.utf-8', 'english' );
// Time Format - See strftime() syntax.
$UI_Timefmt = '%a %B %d, %Y %H:%M:%S';
// UI Init.
$UI_Charset = 'iso-8859-1';
$UI_Title = 'Basic Analysis and Security Engine';
// Common Words.
$UI_CW_Edit = 'Edit';
$UI_CW_Delete = 'Delete';
$UI_CW_Src = 'Source';
$UI_CW_Dst = 'Destination';
$UI_CW_Id = 'ID';
$UI_CW_Name = 'Name';
$UI_CW_Int = 'Interface';
$UI_CW_Filter = 'Filter';
$UI_CW_Desc = 'Description';
$UI_CW_SucDesc = 'Successful';
$UI_CW_Sensor = 'Sensor';
$UI_CW_Sig = 'Signature';
$UI_CW_Role = 'Role';
$UI_CW_Pw = 'Password';
$UI_CW_Ts = 'Timestamp';
$UI_CW_Addr = 'Address';
$UI_CW_Layer = 'Layer';
$UI_CW_Proto = 'Protocol';
$UI_CW_Pri = 'Priority';
$UI_CW_Event = 'Event';
$UI_CW_Type = 'Type';
$UI_CW_ML1 = 'January';
$UI_CW_ML2 = 'February';
$UI_CW_ML3 = 'March';
$UI_CW_ML4 = 'April';
$UI_CW_ML5 = 'May';
$UI_CW_ML6 = 'June';
$UI_CW_ML7 = 'July';
$UI_CW_ML8 = 'August';
$UI_CW_ML9 = 'September';
$UI_CW_ML10 = 'October';
$UI_CW_ML11 = 'November';
$UI_CW_ML12 = 'December';
$UI_CW_Last = 'Last';
$UI_CW_First = 'First';
// Common Phrases.
$UI_CP_SrcName = array($UI_CW_Src,$UI_CW_Name);
$UI_CP_DstName = array('Dest.',$UI_CW_Name);
$UI_CP_SrcDst = array('Src','or','Dest');
$UI_CP_SrcAddr = array($UI_CW_Src,$UI_CW_Addr);
$UI_CP_DstAddr = array($UI_CW_Dst,$UI_CW_Addr);
$UI_CP_L4P = array($UI_CW_Layer,'4',$UI_CW_Proto);
$UI_CP_ET = array($UI_CW_Event,$UI_CW_Type);
// Authentication Data.
$UI_AD_UND = 'Login';
$UI_AD_RID = array($UI_CW_Role,$UI_CW_Id);
$UI_AD_ASD = 'Enabled';

//common phrases
DEFINE('_TOTAL','Total');
DEFINE('_ALERT','Alert');
DEFINE('_ADDRESS','Address');
DEFINE('_UNKNOWN','unknown');
DEFINE('_AND','AND');
DEFINE('_OR','OR');
DEFINE('_IS','is');
DEFINE('_ON','on');
DEFINE('_IN','in');
DEFINE('_ANY','any');
DEFINE('_NONE','none');
DEFINE('_HOUR','Hour');
DEFINE('_DAY','Day');
DEFINE('_MONTH','Month');
DEFINE('_YEAR','Year');
DEFINE('_ALERTGROUP','Alert Group');
DEFINE('_ALERTTIME','Alert Time');
DEFINE('_CONTAINS','contains');
DEFINE('_DOESNTCONTAIN','does not contain');
DEFINE('_SOURCEPORT',strtolower($UI_CW_Src).' port');
DEFINE('_DESTPORT','dest port');
DEFINE('_HAS','has');
DEFINE('_HASNOT','has not');
DEFINE('_PORT','Port');
DEFINE('_FLAGS','Flags');
DEFINE('_MISC','Misc');
DEFINE('_BACK','Back');
DEFINE('_DISPYEAR','{ year }');
DEFINE('_DISPMONTH','{ month }');
DEFINE('_DISPHOUR','{ hour }');
DEFINE('_DISPDAY','{ day }');
DEFINE('_DISPTIME','{ time }');
DEFINE('_ADDADDRESS','ADD Addr');
DEFINE('_ADDIPFIELD','ADD IP Field');
DEFINE('_ADDTIME','ADD TIME');
DEFINE('_ADDTCPPORT','ADD TCP Port');
DEFINE('_ADDTCPFIELD','ADD TCP Field');
DEFINE('_ADDUDPPORT','ADD UDP Port');
DEFINE('_ADDUDPFIELD','ADD UDP Field');
DEFINE('_ADDICMPFIELD','ADD ICMP Field');
DEFINE('_ADDPAYLOAD','ADD Payload');
DEFINE('_MOSTFREQALERTS','Most Frequent Alerts');
DEFINE('_MOSTFREQPORTS','Most Frequent Ports');
DEFINE('_MOSTFREQADDRS','Most Frequent IP addresses');
DEFINE('_LASTALERTS',$UI_CW_Last.' Alerts');
DEFINE('_LASTPORTS',$UI_CW_Last.' Ports');
DEFINE('_LASTTCP',$UI_CW_Last.' TCP Alerts');
DEFINE('_LASTUDP',$UI_CW_Last.' UDP Alerts');
DEFINE('_LASTICMP',$UI_CW_Last.' ICMP Alerts');
DEFINE('_QUERYDB','Query DB');
DEFINE('_QUERYDBP','Query+DB'); //Equals to _QUERYDB where spaces are '+'s. 
                                //Should be something like: DEFINE('_QUERYDBP',str_replace(" ", "+", _QUERYDB));
DEFINE('_SELECTED','Selected');
DEFINE('_ALLONSCREEN','ALL on Screen');
DEFINE('_ENTIREQUERY','Entire Query');
DEFINE('_OPTIONS','Options');
DEFINE('_LENGTH','length');
DEFINE('_CODE','code');
DEFINE('_DATA','data');
DEFINE('_TYPE',$UI_CW_Type);
DEFINE('_NEXT','Next');
DEFINE('_PREVIOUS','Previous');

//Menu items
DEFINE('_HOME','Home');
DEFINE('_SEARCH','Search');
DEFINE('_AGMAINT','Alert Group Maintenance');
DEFINE('_USERPREF','User Preferences');
DEFINE('_CACHE','Cache & Status');
DEFINE('_ADMIN','Administration');
DEFINE('_GALERTD','Graph Alert Data');
DEFINE('_GALERTDT','Graph Alert Detection Time');
DEFINE('_USERMAN','User Management');
DEFINE('_LISTU','List users');
DEFINE('_CREATEU','Create a user');
DEFINE('_ROLEMAN',"$UI_CW_Role Management");
DEFINE('_LISTR',"List $UI_CW_Role".'s');
DEFINE('_CREATER',"Create a $UI_CW_Role");
DEFINE('_LISTALL','List All');
DEFINE('_CREATE','Create');
DEFINE('_VIEW','View');
DEFINE('_CLEAR','Clear');
DEFINE('_LISTGROUPS','List Groups');
DEFINE('_CREATEGROUPS','Create Group');
DEFINE('_VIEWGROUPS','View Group');
DEFINE('_EDITGROUPS',"$UI_CW_Edit Group");
DEFINE('_DELETEGROUPS',"$UI_CW_Delete Group");
DEFINE('_CLEARGROUPS','Clear Group');
DEFINE('_CHNGPWD','Change '.strtolower ($UI_CW_Pw));
DEFINE('_DISPLAYU','Display user');

//base_footer.php
DEFINE('_FOOTER',' (by <A class="largemenuitem" href="mailto:base@secureideas.net">Kevin Johnson</A> and the <A class="largemenuitem" href="http://sourceforge.net/project/memberlist.php?group_id=103348">BASE Project Team</A><BR>Built on ACID by Roman Danyliw )');

//index.php --Log in Page
DEFINE('_LOGINERROR','User does not exist or your '.strtolower ($UI_CW_Pw).' was incorrect!<br>Please try again');

// base_main.php
DEFINE('_MOSTRECENT','Most recent ');
DEFINE('_MOSTFREQUENT','Most frequent ');
DEFINE('_ALERTS',' Alerts:');
DEFINE('_ADDRESSES',' Addresses');
DEFINE('_ANYPROTO','any protocol');
DEFINE('_UNI','unique');
DEFINE('_LISTING','listing');
DEFINE('_TALERTS','Today\'s alerts: ');
DEFINE('_SOURCEIP',"$UI_CW_Src IP");
DEFINE('_DESTIP',"$UI_CW_Dst IP");
DEFINE('_L24ALERTS',$UI_CW_Last.' 24 Hours alerts: ');
DEFINE('_L72ALERTS',$UI_CW_Last.' 72 Hours alerts: ');
DEFINE('_UNIALERTS',' Unique Alerts');
DEFINE('_LSOURCEPORTS',"$UI_CW_Last $UI_CW_Src Ports: ");
DEFINE('_LDESTPORTS',"$UI_CW_Last $UI_CW_Dst Ports: ");
DEFINE('_FREGSOURCEP',"Most Frequent $UI_CW_Src Ports: ");
DEFINE('_FREGDESTP',"Most Frequent $UI_CW_Dst Ports: ");
DEFINE('_QUERIED','Queried on');
DEFINE('_DATABASE','Database:');
DEFINE('_SCHEMAV','Schema Version:');
DEFINE('_TIMEWIN','Time Window:');
DEFINE('_NOALERTSDETECT','no alerts detected');
DEFINE('_USEALERTDB','Use Alert Database');
DEFINE('_USEARCHIDB','Use Archive Database');
DEFINE('_TRAFFICPROBPRO','Traffic Profile by Protocol');

//base_auth.inc.php
DEFINE('_ADDEDSF',"Added $UI_CW_SucDesc".'ly');
DEFINE('_NOPWDCHANGE','Unable to change your '.strtolower ($UI_CW_Pw).': ');
DEFINE('_NOUSER','User doesn\'t exist!');
DEFINE('_OLDPWD','Old '.strtolower ($UI_CW_Pw).' entered doesn\'t match our records!');
DEFINE('_PWDCANT','Unable to change your '.strtolower ($UI_CW_Pw).': ');
DEFINE('_PWDDONE','Your '.strtolower ($UI_CW_Pw).' has been changed!');
DEFINE('_ROLEEXIST',"$UI_CW_Role Already Exists");
// TD Migration Hack
if ($UI_Spacing == 1){
	$glue = ' ';
}else{
	$glue = '';
}
DEFINE('_ROLEIDEXIST',implode($glue, $UI_AD_RID)." Already Exists");
DEFINE('_ROLEADDED',"$UI_CW_Role Added $UI_CW_SucDesc".'ly');

//base_roleadmin.php
DEFINE('_ROLEADMIN',"BASE $UI_CW_Role Administration");
DEFINE('_FRMROLENAME',"$UI_CW_Role $UI_CW_Name:");
DEFINE('_UPDATEROLE',"Update $UI_CW_Role");

//base_useradmin.php
DEFINE('_USERADMIN','BASE User Administration');
DEFINE('_FRMFULLNAME',"Full $UI_CW_Name:");
DEFINE('_FRMUID',"User $UI_CW_Id:");
DEFINE('_SUBMITQUERY','Submit Query');
DEFINE('_UPDATEUSER','Update User');

//admin/index.php
DEFINE('_BASEADMIN','BASE Administration');
DEFINE('_BASEADMINTEXT','Please select an option from the left.');

//base_action.inc.php
DEFINE('_NOACTION','No action was specified on the alerts');
DEFINE('_INVALIDACT',' is an invalid action');
DEFINE('_ERRNOAG','Could not add alerts since no AG was specified');
DEFINE('_ERRNOEMAIL','Could not email alerts since no email address was specified');
DEFINE('_ACTION','ACTION');
DEFINE('_CONTEXT','context');
DEFINE('_ADDAGID',"ADD to AG (by $UI_CW_Id)");
DEFINE('_ADDAG','ADD-New-AG');
DEFINE('_ADDAGNAME',"ADD to AG (by $UI_CW_Name)");
DEFINE('_CREATEAG',"Create AG (by $UI_CW_Name)");
DEFINE('_CLEARAG','Clear from AG');
DEFINE('_DELETEALERT','Delete alert(s)');
DEFINE('_EMAILALERTSFULL','Email alert(s) (full)');
DEFINE('_EMAILALERTSSUMM','Email alert(s) (summary)');
DEFINE('_EMAILALERTSCSV','Email alert(s) (csv)');
DEFINE('_ARCHIVEALERTSCOPY','Archive alert(s) (copy)');
DEFINE('_ARCHIVEALERTSMOVE','Archive alert(s) (move)');
DEFINE('_IGNORED','Ignored ');
DEFINE('_DUPALERTS',' duplicate alert(s)');
DEFINE('_ALERTSPARA',' alert(s)');
DEFINE('_NOALERTSSELECT','No alerts were selected or the');
DEFINE('_NOTSUCCESSFUL','was not '.strtolower($UI_CW_SucDesc));
DEFINE('_ERRUNKAGID',"Unknown AG $UI_CW_Id specified (AG probably does not exist)");
DEFINE('_ERRREMOVEFAIL','Failed to remove new AG');
DEFINE('_GENBASE','Generated by BASE');
DEFINE('_ERRNOEMAILEXP','EXPORT ERROR: Could not send exported alerts to');
DEFINE('_ERRNOEMAILPHP','Check the mail configuration in PHP.');
DEFINE('_ERRDELALERT','Error Deleting Alert');
DEFINE('_ERRARCHIVE','Archive error:');
DEFINE('_ERRMAILNORECP','MAIL ERROR: No recipient Specified');

//base_cache.inc.php
DEFINE('_ADDED','Added ');
DEFINE('_HOSTNAMESDNS',' host'.strtolower($UI_CW_Name).'s to the IP DNS cache');
DEFINE('_HOSTNAMESWHOIS',' host'.strtolower($UI_CW_Name).'s to the Whois cache');
DEFINE('_ERRCACHENULL','Caching ERROR: NULL '.$UI_CW_Event.' row found?');
DEFINE('_ERRCACHEERROR',$UI_CW_Event.' CACHING ERROR:');
DEFINE('_ERRCACHEUPDATE','Could not update '.$UI_CW_Event.' cache');
DEFINE('_ALERTSCACHE',' alert(s) to the Alert cache');

//base_db.inc.php
DEFINE('_ERRSQLTRACE','Unable to open SQL trace file');
DEFINE('_ERRSQLCONNECT','Error connecting to DB :');
DEFINE('_ERRSQLCONNECTINFO','<P>Check the DB connection variables in <I>base_conf.php</I> 
              <PRE>
               = $alert_dbname   : MySQL database '.strtolower($UI_CW_Name).' where the alerts are stored 
               = $alert_host     : host where the database is stored
               = $alert_port     : port where the database is stored
               = $alert_user     : user'.strtolower($UI_CW_Name).' into the database
               = $alert_password : '.strtolower ($UI_CW_Pw).' for the user'.strtolower($UI_CW_Name).'
              </PRE>
              <P>');
DEFINE('_ERRSQLPCONNECT','Error (p)connecting to DB :');
DEFINE('_ERRSQLDB','Database ERROR:');
DEFINE('_DBALCHECK','Checking for DB abstraction lib in');
DEFINE('_ERRSQLDBALLOAD1','<P><B>Error loading the DB Abstraction library: </B> from ');
DEFINE('_ERRSQLDBALLOAD2','<P>Check the DB abstraction library variable <CODE>$DBlib_path</CODE> in <CODE>base_conf.php</CODE>
            <P>
            The underlying database library currently used is ADODB, that can be downloaded
            at ');
DEFINE('_ERRSQLDBTYPE','Invalid Database '.$UI_CW_Type.' Specified');
DEFINE('_ERRSQLDBTYPEINFO1','The variable <CODE>\$DBtype</CODE> in <CODE>base_conf.php</CODE> was set to the unrecognized database '.$UI_CW_Type.' of ');
DEFINE('_ERRSQLDBTYPEINFO2','Only the following databases are supported: <PRE>
                MySQL         : \'mysql\'
                PostgreSQL    : \'postgres\'
                MS SQL Server : \'mssql\'
                Oracle        : \'oci8\'
             </PRE>');

//base_log_error.inc.php
DEFINE('_ERRBASEFATAL','BASE FATAL ERROR:');

//base_log_timing.inc.php
DEFINE('_LOADEDIN','Loaded in');
DEFINE('_SECONDS','seconds');

//base_net.inc.php
DEFINE('_ERRRESOLVEADDRESS','Unable to resolve address');

//base_output_query.inc.php
DEFINE('_QUERYRESULTSHEADER','Query Results Output Header');

//base_signature.inc.php
DEFINE('_ERRSIGNAMEUNK',"Sig$UI_CW_Name unknown");
DEFINE('_ERRSIGPROIRITYUNK','SigPriority unknown');
DEFINE('_UNCLASS','unclassified');

//base_state_citems.inc.php
DEFINE('_DENCODED','data encoded as');
DEFINE('_NODENCODED','(no data conversion, assuming criteria in DB native encoding)');
DEFINE('_SHORTJAN','Jan');
DEFINE('_SHORTFEB','Feb');
DEFINE('_SHORTMAR','Mar');
DEFINE('_SHORTAPR','Apr');
DEFINE('_SHORTMAY','May');
DEFINE('_SHORTJUN','Jun');
DEFINE('_SHORTJLY','Jly');
DEFINE('_SHORTAUG','Aug');
DEFINE('_SHORTSEP','Sep');
DEFINE('_SHORTOCT','Oct');
DEFINE('_SHORTNOV','Nov');
DEFINE('_SHORTDEC','Dec');
DEFINE('_DISPSIG','{ '.strtolower ($UI_CW_Sig).' }');
DEFINE('_DISPANYCLASS','{ any Classification }');
DEFINE('_DISPANYPRIO','{ any Priority }');
DEFINE('_DISPANYSENSOR',"{ any $UI_CW_Sensor }");
DEFINE('_DISPADDRESS','{ address }');
DEFINE('_DISPFIELD','{ field }');
DEFINE('_DISPPORT','{ port }');
DEFINE('_DISPENCODING','{ encoding }');
DEFINE('_DISPCONVERT2','{ Convert To }');
DEFINE('_DISPANYAG','{ any Alert Group }');
DEFINE('_DISPPAYLOAD','{ payload }');
DEFINE('_DISPFLAGS','{ flags }');
DEFINE('_SIGEXACTLY','exactly');
DEFINE('_SIGROUGHLY','roughly');
DEFINE('_SIGCLASS',"$UI_CW_Sig Classification");
DEFINE('_SIGPRIO',"$UI_CW_Sig Priority");
DEFINE('_SHORTSOURCE',$UI_CW_Src);
DEFINE('_SHORTDEST','Dest');
DEFINE('_SHORTSOURCEORDEST','Src or Dest');
DEFINE('_NOLAYER4','no layer4');
DEFINE('_INPUTCRTENC','Input Criteria Encoding '.$UI_CW_Type);
DEFINE('_CONVERT2WS','Convert To (when searching)');

//base_state_common.inc.php
DEFINE('_PHPERRORCSESSION','PHP ERROR: A custom (user) PHP session have been detected. However, BASE has not been set to explicitly use this custom handler.  Set <CODE>use_user_session=1</CODE> in <CODE>base_conf.php</CODE>');
DEFINE('_PHPERRORCSESSIONCODE','PHP ERROR: A custom (user) PHP session hander has been configured, but the supplied hander code specified in <CODE>user_session_path</CODE> is invalid.');
DEFINE('_PHPERRORCSESSIONVAR','PHP ERROR: A custom (user) PHP session handler has been configured, but the implementation of this handler has not been specified in BASE.  If a custom session handler is desired, set the <CODE>user_session_path</CODE> variable in <CODE>base_conf.php</CODE>.');
DEFINE('_PHPSESSREG','Session Registered');

//base_state_criteria.inc.php
DEFINE('_REMOVE','Removing');
DEFINE('_FROMCRIT','from criteria');
DEFINE('_ERRCRITELEM','Invalid criteria element');

//base_state_query.inc.php
DEFINE('_VALIDCANNED','Valid Canned Query List');
DEFINE('_DISPLAYING','Displaying');
DEFINE('_DISPLAYINGTOTAL','Displaying alerts %d-%d of %d total');
DEFINE('_NOALERTS','No Alerts were found.');
DEFINE('_QUERYRESULTS','Query Results');
DEFINE('_QUERYSTATE','Query State');
DEFINE('_DISPACTION','{ action }');

//base_ag_common.php
DEFINE('_ERRAGNAMESEARCH','The specified AG '.strtolower($UI_CW_Name).' search is invalid.  Try again!');
DEFINE('_ERRAGNAMEEXIST','The specified AG does not exist.');
DEFINE('_ERRAGIDSEARCH',"The specified AG $UI_CW_Id search is invalid.  Try again!");
DEFINE('_ERRAGLOOKUP',"Error looking up an AG $UI_CW_Id");
DEFINE('_ERRAGINSERT','Error Inserting new AG');

//base_ag_main.php
DEFINE('_AGMAINTTITLE','Alert Group (AG) Maintenance');
DEFINE('_ERRAGUPDATE','Error updating the AG');
DEFINE('_ERRAGPACKETLIST','Error deleting packet list for the AG:');
DEFINE('_ERRAGDELETE','Error deleting the AG');
DEFINE('_AGDELETE','DELETED '.strtolower($UI_CW_SucDesc).'ly');
DEFINE('_AGDELETEINFO','information deleted');
DEFINE('_ERRAGSEARCHINV','The entered search criteria is invalid.  Try again!');
DEFINE('_ERRAGSEARCHNOTFOUND','No AG found with that criteria.');
DEFINE('_NOALERTGOUPS','There are no Alert Groups');
DEFINE('_NUMALERTS','# Alerts');
DEFINE('_ACTIONS','Actions');
DEFINE('_NOTASSIGN','not assigned yet');
DEFINE('_SAVECHANGES','Save Changes');
DEFINE('_CONFIRMDELETE','Confirm Delete');
DEFINE('_CONFIRMCLEAR','Confirm Clear');

//base_common.php
DEFINE('_PORTSCAN','Portscan Traffic');

//base_db_common.php
DEFINE('_ERRDBINDEXCREATE','Unable to CREATE INDEX for');
DEFINE('_DBINDEXCREATE',$UI_CW_SucDesc.'ly created INDEX for');
DEFINE('_ERRSNORTVER','It might be an older version.  Only alert databases created by Snort 1.7-beta0 or later are supported');
DEFINE('_ERRSNORTVER1','The underlying database');
DEFINE('_ERRSNORTVER2','appears to be incomplete/invalid');
DEFINE('_ERRDBSTRUCT1','The database version is valid, but the BASE DB structure');
DEFINE('_ERRDBSTRUCT2','is not present. Use the <A HREF="base_db_setup.php">Setup page</A> to configure and optimize the DB.');
DEFINE('_ERRPHPERROR','PHP ERROR');
DEFINE('_ERRPHPERROR1','Incompatible version');
DEFINE('_ERRVERSION','Version');
DEFINE('_ERRPHPERROR2','of PHP is too old.  Please upgrade to version 4.0.4 or later');
DEFINE('_ERRPHPMYSQLSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite MySQL support required to 
               read the alert database was not built into PHP.  
               Please recompile PHP with the necessary library (<CODE>--with-mysql</CODE>)</FONT>');
DEFINE('_ERRPHPPOSTGRESSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite PostgreSQL support required to 
               read the alert database was not built into PHP.  
               Please recompile PHP with the necessary library (<CODE>--with-pgsql</CODE>)</FONT>');
DEFINE('_ERRPHPMSSQLSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite MS SQL Server support required to 
                   read the alert database was not built into PHP.  
                   Please recompile PHP with the necessary library (<CODE>--enable-mssql</CODE>)</FONT>');
DEFINE('_ERRPHPORACLESUP','<B>PHP build incomplete</B>: <FONT>the prerequisite Oracle support required to 
                   read the alert database was not built into PHP.  
                   Please recompile PHP with the necessary library (<CODE>--with-oci8</CODE>)</FONT>');

//base_graph_form.php
DEFINE('_CHARTTITLE','Chart Title:');
DEFINE('_CHARTTYPE','Chart '.$UI_CW_Type.':');
DEFINE('_CHARTTYPES','{ chart '.$UI_CW_Type.' }');
DEFINE('_CHARTPERIOD','Chart Period:');
DEFINE('_PERIODNO','no period');
DEFINE('_PERIODWEEK','7 (a week)');
DEFINE('_PERIODDAY','24 (whole day)');
DEFINE('_PERIOD168','168 (24x7)');
DEFINE('_CHARTSIZE','Size: (width x height)');
DEFINE('_PLOTMARGINS','Plot Margins: (left x right x top x bottom)');
DEFINE('_PLOTTYPE','Plot '.$UI_CW_Type.':');
DEFINE('_TYPEBAR','bar');
DEFINE('_TYPELINE','line');
DEFINE('_TYPEPIE','pie');
DEFINE('_CHARTHOUR','{hour}');
DEFINE('_CHARTDAY','{day}');
DEFINE('_CHARTMONTH','{month}');
DEFINE('_GRAPHALERTS','Graph Alerts');
DEFINE('_AXISCONTROLS','X / Y AXIS CONTROLS');
DEFINE('_CHRTTYPEHOUR','Time (hour) vs. Number of Alerts');
DEFINE('_CHRTTYPEDAY','Time (day) vs. Number of Alerts');
DEFINE('_CHRTTYPEWEEK','Time (week) vs. Number of Alerts');
DEFINE('_CHRTTYPEMONTH','Time (month) vs. Number of Alerts');
DEFINE('_CHRTTYPEYEAR','Time (year) vs. Number of Alerts');
DEFINE('_CHRTTYPESRCIP','Src. IP address vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTIP','Dst. IP address vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTUDP','Dst. UDP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESRCUDP','Src. UDP Port vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTPORT','Dst. TCP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESRCPORT','Src. TCP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESIG','Sig. Classification vs. Number of Alerts');
DEFINE('_CHRTTYPESENSOR',"$UI_CW_Sensor vs. Number of Alerts");
DEFINE('_CHRTBEGIN','Chart Begin:');
DEFINE('_CHRTEND','Chart End:');
DEFINE('_CHRTDS',"Data $UI_CW_Src:");
DEFINE('_CHRTX','X Axis');
DEFINE('_CHRTY','Y Axis');
DEFINE('_CHRTMINTRESH','Minimum Threshold Value');
DEFINE('_CHRTROTAXISLABEL','Rotate Axis Labels (90 degrees)');
DEFINE('_CHRTSHOWX','Show X-axis grid-lines');
DEFINE('_CHRTDISPLABELX','Display X-axis label every');
DEFINE('_CHRTDATAPOINTS','data points');
DEFINE('_CHRTYLOG','Y-axis logarithmic');
DEFINE('_CHRTYGRID','Show Y-axis grid-lines');

//base_graph_main.php
DEFINE('_CHRTTITLE','BASE Chart');
DEFINE('_ERRCHRTNOTYPE','No chart '.$UI_CW_Type.' was specified');
DEFINE('_ERRNOAGSPEC','No AG was specified.  Using all alerts.');
DEFINE('_CHRTDATAIMPORT','Starting data import');
DEFINE('_CHRTTIMEVNUMBER','Time vs. Number of Alerts');
DEFINE('_CHRTTIME','Time');
DEFINE('_CHRTALERTOCCUR','Alert Occurrences');
DEFINE('_CHRTSIPNUMBER',"$UI_CW_Src IP vs. Number of Alerts");
DEFINE('_CHRTSIP',"$UI_CW_Src IP Address");
DEFINE('_CHRTDIPALERTS',"$UI_CW_Dst IP vs. Number of Alerts");
DEFINE('_CHRTDIP',"$UI_CW_Dst IP Address");
DEFINE('_CHRTUDPPORTNUMBER',"UDP Port ($UI_CW_Dst) vs. Number of Alerts");
DEFINE('_CHRTDUDPPORT','Dst. UDP Port');
DEFINE('_CHRTSUDPPORTNUMBER',"UDP Port ($UI_CW_Src) vs. Number of Alerts");
DEFINE('_CHRTSUDPPORT','Src. UDP Port');
DEFINE('_CHRTPORTDESTNUMBER',"TCP Port ($UI_CW_Dst) vs. Number of Alerts");
DEFINE('_CHRTPORTDEST','Dst. TCP Port');
DEFINE('_CHRTPORTSRCNUMBER',"TCP Port ($UI_CW_Src) vs. Number of Alerts");
DEFINE('_CHRTPORTSRC','Src. TCP Port');
DEFINE('_CHRTSIGNUMBER',"$UI_CW_Sig Classification vs. Number of Alerts");
DEFINE('_CHRTCLASS','Classification');
DEFINE('_CHRTSENSORNUMBER',"$UI_CW_Sensor vs. Number of Alerts");
DEFINE('_CHRTHANDLEPERIOD','Handling Period if necessary');
DEFINE('_CHRTDUMP','Dumping data ... (writing only every');
DEFINE('_CHRTDRAW','Drawing graph');
DEFINE('_ERRCHRTNODATAPOINTS','No data points to plot');
DEFINE('_GRAPHALERTDATA','Graph Alert Data');

//base_maintenance.php
DEFINE('_MAINTTITLE','Maintenance');
DEFINE('_MNTPHP','PHP Build:');
DEFINE('_MNTCLIENT','CLIENT:');
DEFINE('_MNTSERVER','SERVER:');
DEFINE('_MNTSERVERHW','SERVER HW:');
DEFINE('_MNTPHPVER','PHP VERSION:');
DEFINE('_MNTPHPAPI','PHP API:');
DEFINE('_MNTPHPLOGLVL','PHP Logging level:');
DEFINE('_MNTPHPMODS','Loaded Modules:');
DEFINE('_MNTDBTYPE','DB '.$UI_CW_Type.':');
DEFINE('_MNTDBALV','DB Abstraction Version:');
DEFINE('_MNTDBALERTNAME',"ALERT DB $UI_CW_Name:");
DEFINE('_MNTDBARCHNAME',"ARCHIVE DB $UI_CW_Name:");
DEFINE('_MNTAIC','Alert Information Cache:');
DEFINE('_MNTAICTE','Total '.$UI_CW_Event.'s:');
DEFINE('_MNTAICCE','Cached '.$UI_CW_Event.'s:');
DEFINE('_MNTIPAC','IP Address Cache');
DEFINE('_MNTIPACUSIP','Unique Src IP:');
DEFINE('_MNTIPACDNSC','DNS Cached:');
DEFINE('_MNTIPACWC','Whois Cached:');
DEFINE('_MNTIPACUDIP','Unique Dst IP:');

//base_qry_alert.php
DEFINE('_QAINVPAIR','Invalid (sid,cid) pair');
DEFINE('_QAALERTDELET','Alert DELETED');
DEFINE('_QATRIGGERSIG',"Triggered $UI_CW_Sig");
DEFINE('_QANORMALD','Normal Display');
DEFINE('_QAPLAIND','Plain Display');
DEFINE('_QANOPAYLOAD','Fast logging used so payload was discarded');

//base_qry_common.php
DEFINE('_QCSIG',strtolower ($UI_CW_Sig));
DEFINE('_QCIPADDR','IP addresses');
DEFINE('_QCIPFIELDS','IP fields');
DEFINE('_QCTCPPORTS','TCP ports');
DEFINE('_QCTCPFLAGS','TCP flags');
DEFINE('_QCTCPFIELD','TCP fields');
DEFINE('_QCUDPPORTS','UDP ports');
DEFINE('_QCUDPFIELDS','UDP fields');
DEFINE('_QCICMPFIELDS','ICMP fields');
DEFINE('_QCDATA','Data');
DEFINE('_QCERRCRITWARN','Criteria warning:');
DEFINE('_QCERRVALUE','A value of');
DEFINE('_QCERRFIELD','A field of');
DEFINE('_QCERROPER','An operator of');
DEFINE('_QCERRDATETIME','A date/time value of');
DEFINE('_QCERRPAYLOAD','A payload value of');
DEFINE('_QCERRIP','An IP address of');
DEFINE('_QCERRIPTYPE','An IP address of '.$UI_CW_Type);
DEFINE('_QCERRSPECFIELD',' was entered for a protocol field, but the particular field was not specified.');
DEFINE('_QCERRSPECVALUE','was selected indicating that it should be a criteria, but no value was specified on which to match.');
DEFINE('_QCERRBOOLEAN','Multiple protocol field criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCERRDATEVALUE','was selected indicating that some date/time criteria should be matched, but no value was specified.');
DEFINE('_QCERRINVHOUR','(Invalid Hour) No date criteria were entered with the specified time.');
DEFINE('_QCERRDATECRIT','was selected indicating that some date/time criteria should be matched, but no value was specified.');
DEFINE('_QCERROPERSELECT','was entered but no operator was selected.');
DEFINE('_QCERRDATEBOOL','Multiple Date/Time criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCERRPAYCRITOPER','was entered for a payload criteria field, but an operator (e.g. has, has not) was not specified.');
DEFINE('_QCERRPAYCRITVALUE','was selected indicating that payload should be a criteria, but no value on which to match was specified.');
DEFINE('_QCERRPAYBOOL','Multiple Data payload criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCMETACRIT','Meta Criteria');
DEFINE('_QCIPCRIT','IP Criteria');
DEFINE('_QCPAYCRIT','Payload Criteria');
DEFINE('_QCTCPCRIT','TCP Criteria');
DEFINE('_QCUDPCRIT','UDP Criteria');
DEFINE('_QCICMPCRIT','ICMP Criteria');
DEFINE('_QCLAYER4CRIT','Layer 4 Criteria');
DEFINE('_QCERRINVIPCRIT','Invalid IP address criteria');
DEFINE('_QCERRCRITADDRESSTYPE','was entered for as a criteria value, but the '.$UI_CW_Type.' of address (e.g. '.strtolower($UI_CW_Src).', '.strtolower($UI_CW_Dst).') was not specified.');
DEFINE('_QCERRCRITIPADDRESSNONE','indicating that an IP address should be a criteria, but no address on which to match was specified.');
DEFINE('_QCERRCRITIPADDRESSNONE1','was selected (at #');
DEFINE('_QCERRCRITIPIPBOOL','Multiple IP address criteria entered without a boolean operator (e.g. AND, OR) between IP Criteria');

//base_qry_form.php
DEFINE('_QFRMSORTORDER','Sort order');
DEFINE('_QFRMSORTNONE','none');
DEFINE('_QFRMTIMEA',strtolower($UI_CW_Ts).' (ascend)');
DEFINE('_QFRMTIMED',strtolower($UI_CW_Ts).' (descend)');
DEFINE('_QFRMSIG',strtolower($UI_CW_Sig));
DEFINE('_QFRMSIP',strtolower($UI_CW_Src).' IP');
DEFINE('_QFRMDIP','dest. IP');

//base_qry_sqlcalls.php
DEFINE('_QSCSUMM','Summary Statistics');
DEFINE('_QSCTIMEPROF','Time profile');
DEFINE('_QSCOFALERTS','of alerts');

//base_stat_alerts.php
DEFINE('_ALERTTITLE','Alert Listing');

//base_stat_common.php
DEFINE('_SCCATEGORIES','Categories:');
DEFINE('_SCSENSORTOTAL',$UI_CW_Sensor.'s/Total:');
DEFINE('_SCTOTALNUMALERTS','Total Number of Alerts:');
DEFINE('_SCSRCIP','Src IP addrs:');
DEFINE('_SCDSTIP','Dest. IP addrs:');
DEFINE('_SCUNILINKS','Unique IP links');
DEFINE('_SCSRCPORTS',"$UI_CW_Src Ports: ");
DEFINE('_SCDSTPORTS','Dest Ports: ');
DEFINE('_SCSENSORS',$UI_CW_Sensor.'s');
DEFINE('_SCCLASS','classifications');
DEFINE('_SCUNIADDRESS','Unique addresses: ');
DEFINE('_SCSOURCE',$UI_CW_Src);
DEFINE('_SCDEST',$UI_CW_Dst);
DEFINE('_SCPORT','Port');

//base_stat_ipaddr.php
DEFINE('_PSEVENTERR','PORTSCAN '.$UI_CW_Event.' ERROR: ');
DEFINE('_PSEVENTERRNOFILE','No file was specified in the $portscan_file variable.');
DEFINE('_PSEVENTERROPENFILE','Unable to open Portscan '.$UI_CW_Event.' file');
DEFINE('_PSDATETIME','Date/Time');
DEFINE('_PSSRCIP',"$UI_CW_Src IP");
DEFINE('_PSDSTIP','$UI_CW_Dst IP');
DEFINE('_PSSRCPORT',"$UI_CW_Src Port");
DEFINE('_PSDSTPORT','$UI_CW_Dst Port');
DEFINE('_PSTCPFLAGS','TCP Flags');
DEFINE('_PSTOTALOCC','Total<BR> Occurrences');
DEFINE('_PSNUMSENSORS',"Num of $UI_CW_Sensor".'s');
DEFINE('_PSFIRSTOCC',$UI_CW_First.'<BR> Occurrence');
DEFINE('_PSLASTOCC',$UI_CW_Last.'<BR> Occurrence');
DEFINE('_PSUNIALERTS','Unique Alerts');
DEFINE('_PSPORTSCANEVE','Portscan '.$UI_CW_Event.'s');
DEFINE('_PSREGWHOIS','Registry lookup (whois) in');
DEFINE('_PSNODNS','no DNS resolution attempted');
DEFINE('_PSNUMSENSORSBR',"Num of <BR>$UI_CW_Sensor".'s');
DEFINE('_PSOCCASSRC','Occurances <BR>as Src.');
DEFINE('_PSOCCASDST','Occurances <BR>as Dest.');
DEFINE('_PSWHOISINFO','Whois Information');
DEFINE('_PSTOTALHOSTS','Total Hosts Scanned');
DEFINE('_PSDETECTAMONG','%d unique alerts detected among %d alerts on %s');
DEFINE('_PSALLALERTSAS','all alerts with %s/%s as');
DEFINE('_PSSHOW','show');
DEFINE('_PSEXTERNAL','external');

//base_stat_iplink.php
DEFINE('_SIPLTITLE','IP Links');
DEFINE('_SIPLSOURCEFGDN',"$UI_CW_Src FQDN");
DEFINE('_SIPLDESTFGDN','$UI_CW_Dst FQDN');
DEFINE('_SIPLDIRECTION','Direction');
DEFINE('_SIPLPROTO','Protocol');
DEFINE('_SIPLUNIDSTPORTS','Unique Dst Ports');
DEFINE('_SIPLUNIEVENTS','Unique '.$UI_CW_Event.'s');
DEFINE('_SIPLTOTALEVENTS','Total '.$UI_CW_Event.'s');

//base_stat_ports.php
DEFINE('_UNIQ','Unique');
DEFINE('_DSTPS','$UI_CW_Dst Port(s)');
DEFINE('_SRCPS',"$UI_CW_Src Port(s)");
DEFINE('_OCCURRENCES','Occurrences');

//base_stat_sensor.php
DEFINE('SPSENSORLIST',"$UI_CW_Sensor Listing");

//base_stat_time.php
DEFINE('_BSTTITLE','Time Profile of Alerts');
DEFINE('_BSTTIMECRIT','Time Criteria');
DEFINE('_BSTERRPROFILECRIT','<FONT><B>No profiling criteria was specified!</B>  Click on "hour", "day", or "month" to choose the granularity of the aggregate statistics.</FONT>');
DEFINE('_BSTERRTIMETYPE','<FONT><B>The '.$UI_CW_Type.' of time parameter which will be passed was not specified!</B>  Choose either "on", to specify a single date, or "between" to specify an interval.</FONT>');
DEFINE('_BSTERRNOYEAR','<FONT><B>No Year parameter was specified!</B></FONT>');
DEFINE('_BSTERRNOMONTH','<FONT><B>No Month parameter was specified!</B></FONT>');
DEFINE('_BSTERRNODAY','<FONT><B>No Day parameter was specified!</B></FONT>');
DEFINE('_BSTPROFILEBY','Profile by');
DEFINE('_TIMEON','on');
DEFINE('_TIMEBETWEEN','between');
DEFINE('_PROFILEALERT','Profile Alert');

//base_stat_uaddr.php
DEFINE('_UNISADD',"Unique $UI_CW_Src Address(es)");
DEFINE('_SUASRCIP','Src IP address');
DEFINE('_SUAERRCRITADDUNK','CRITERIA ERROR: unknown address '.$UI_CW_Type.' -- assuming Dst address');
DEFINE('_UNIDADD','Unique $UI_CW_Dst Address(es)');
DEFINE('_SUADSTIP','Dst IP address');
DEFINE('_SUAUNIALERTS','Unique&nbsp;Alerts');
DEFINE('_SUASRCADD','Src.&nbsp;Addr.');
DEFINE('_SUADSTADD','Dest.&nbsp;Addr.');

//base_user.php
DEFINE('_BASEUSERTITLE','BASE User preferences');
DEFINE('_BASEUSERERRPWD','Your '.strtolower ($UI_CW_Pw).' can not be blank or the two '.strtolower ($UI_CW_Pw).'s did not match!');
DEFINE('_BASEUSEROLDPWD',"Old $UI_CW_Pw:");
DEFINE('_BASEUSERNEWPWD',"New $UI_CW_Pw:");
DEFINE('_BASEUSERNEWPWDAGAIN',"New $UI_CW_Pw Again:");

DEFINE('_LOGOUT','Logout');

?>
