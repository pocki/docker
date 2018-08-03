<?php

//INSTALLED OR NOT ?
$globalInstalled = strtolower(getenv('FLIGHT_INSTALLED')) === 'true'?true:false;

//GLOBAL SITE NAME
$globalName = 'mysite';

// GLOBAL URL
$globalURL = '';

// Logo URL
$logoURL = '/images/logo2.png';

// Activate debug
$globalDebug = TRUE;

// LANGUAGE
$globalLanguage = 'EN'; // Used only for wikipedia links for now

// MAP PROVIDER
$globalMapProvider = 'OpenStreetMap'; // Can be Mapbox, OpenStreetMap, MapQuest-OSM or MapQuest-Aerial
$globalMapboxId = 'examples.map-i86nkdio'; // Mapbox id
$globalMapboxToken = ''; // Mapbox token
$globalGoogleAPIKey = '';
$globalBingMapKey = '';
$globalHereappID = '';
$globalHereappCode = '';
$globalMapQuestKey = '';
$globalOpenWeatherMapKey = '';
// Customs layers source must be configured this way:
//$globalMapCustomLayer = array('custom' => array('url' => 'http://myownserver','maxZoom' => 18, 'minZoom' => 0,'attribution' => 'MySelf'));

// OFFLINE MODE
$globalMapOffline = FALSE; // Use Natural Earth II
$globalOffline = FALSE; // don't try to use internet for anything
// MAP 3D
$globalMap3D = TRUE; // User can choose 3D map
$globalMap3Ddefault = FALSE; // Display 3D map by default
$globalMap3DTiles = ''; // A 3D tileset
$globalMap3DLiveries = FALSE; // Use real liveries in 3D
$globalMap3DOneModel = FALSE; // Use same model for all aircrafts
$globalMap3DShadows = TRUE; // Enable sun shadow on 3D mode

//COVERAGE AREA (its based on a box model. i.e. top-left | top-right | bottom-right | bottom-left)
$globalLatitudeMax = ''; //the maximum latitude (north)
$globalLatitudeMin = ''; //the minimum latitude (south)
$globalLongitudeMax = ''; //the maximum longitude (west)
$globalLongitudeMin = ''; //the minimum longitude (east)

$globalCenterLatitude = getenv('FLIGHT_CENTER_LAT'); //the latitude center of your coverage area
$globalCenterLongitude = getenv('FLIGHT_CENTER_LON');//the longitude center of your coverage area

$globalLiveZoom = '9'; //default zoom on Live Map

// FLIGHTS MUST BE INSIDE THIS CIRCLE
$globalDistanceIgnore = array();
// ^^ example for 100km : array('latitude' => '46.38','longitide' => '5.29','distance' => '100');

// DATABASE CONNECTION LOGIN
$globalDBdriver = 'mysql'; // PDO driver used. Tested with mysql, maybe pgsql or others work...
$globalDBhost = getenv('FLIGHT_DB_HOST'); //'mysql'; //database connection url
$globalDBuser = getenv('FLIGHT_DB_USER'); //'flight'; //database username
$globalDBpass = getenv('FLIGHT_DB_PASS'); //'flight'; //database password
$globalDBname = getenv('FLIGHT_DB_NAME'); //'flight'; //database name
$globalDBport = '3306'; //database port									   
$globalTransaction = TRUE; //Activate database transaction support


//FLIGHTAWARE API INFO (not supported)
$globalFlightAware = FALSE; //set to TRUE to use FlightAware as data import
$globalFlightAwareUsername = ''; //FlightAware Username
$globalFlightAwarePassword = ''; //FlightAware Password/API key

// TIMEZONE
$globalTimezone = getenv('FLIGHT_TIMEZONE'); //Australia/Sydney';

// DAEMON
$globalDaemon = TRUE; // Run cron-sbs.php as daemon (don't work well if source is a real SBS1 device)
$globalCronEnd = '60'; //the script run for xx seconds if $globalDaemon is disable in SBS mode

// FORK
$globalFork = TRUE; // Allow cron-sbs.php to fork to fetch schedule, no more schedules fetch if set to FALSE

// MINIMUM TIME BETWEEN UPDATES FOR HTTP SOURCES (in seconds)
$globalMinFetch = '50';

// DISPLAY FLIGHT INTERVAL ON MAP (in seconds)
$globalLiveInterval = '200';
// MINIMAL CHANGE TO PUT IN DB
$globalCoordMinChange = '0.02'; // minimal change since last message for latitude/longitude (limit write to DB)
$globalCoordMinChangeTracker = '0.01'; // minimal change since last message for latitude/longitude (limit write to DB) for tracker

// LIVE MAP REFRESH (in seconds)
$globalMapRefresh = '30';

// ADD FLIGHTS THAT ARE VISIBLE (boarding box)
$globalMapUseBbox = FALSE;

// IDLE TIMEOUT (in minutes)
$globalMapIdleTimeout = '30';

// DISPLAY INFO OF FLIGHTS IN A POPUP
$globalMapPopup = FALSE;
// DISPLAY INFO OF AIRPORTS IN A POPUP
$globalAirportPopup = FALSE;

// DISPLAY ROUTE OF FLIGHT
$globalMapRoute = TRUE;

// DISPLAY REMAINING ROUTE OF FLIGHT
$globalMapRemainingRoute = TRUE;

// DISPLAY FLIGHTS PATH HISTORY
$globalMapHistory = FALSE;

// FLIGHT ESTIMATION BETWEEN UPDATES
$globalMapEstimation = TRUE;

// PUT ALL FLIGHTS IN DB (even without coordinates)
$globalAllFlights = TRUE;
// WRAP MAP OR REPEAT
$globalMapWrap = TRUE;

// ALLOW SITE TRANSLATION
$globalTranslate = TRUE;

// UNITS
$globalUnitDistance = 'km'; // km, nm or mi
$globalUnitAltitude = 'm'; // m or feet
$globalUnitSpeed = 'kmh'; // kmh, knots or mph

// CUSTOM CSS
$globalCustomCSS = '';
// *** Pilots/Owners ***
// Force the display of owners or/and pilots. Can be used for paragliding.
//$globalUseOwner = TRUE;
//$globalUsePilot = TRUE;
// *** Virtual flights ***
// Virtual Airline (generic)
$globalVA = FALSE;
//IVAO
$globalIVAO = FALSE;

//VATSIM
$globalVATSIM = FALSE;

//phpVMS
$globalphpVMS = FALSE;

//Virtual Airlien Manager
$globalVAM = FALSE;
//User can choose between IVAO, VATSIM or phpVMS
$globalMapVAchoose = FALSE;
// Use real airlines even for IVAO & VATSIM
$globalUseRealAirlines = FALSE;
// ************************
// *** Virtual marine ***
// Virtual Marine (generic)
$globalVM = FALSE;
// Sailaway email & pass
//$globalSailaway = array('email' => '', 'password' => '');
// Set custom marine pics
//$globalMarineImagePics = array('type' => array('boat type' => array('image_thumbnail' => '','image' => '', 'image_copyright' => '','image_source' => '','image_source_website' => '')));
// ************************
							   

//ADS-B, SBS1 FORMAT
$globalSBS1 = TRUE; //set to FALSE to not use SBS1 as data import
$globalSourcesTimeOut = '15';
$globalSourcesupdate = '10'; //Put data in DB after xx seconds/flight

//DATA SOURCES
$globalSources = array(array('host' => getenv('FLIGHT_SBS1_HOST'), 'port' => getenv('FLIGHT_SBS1_PORT'), 'format' => 'sbs'));
// ^^ in the form array(array(host => 'host1', 'port' => 'port1','name' => 'first source','format' => 'sbs'),array('host' => 'host2', 'port' => 'port2','name' => 'Other source', 'format' => 'aprs'),array('host' => 'http://xxxxx/whazzup.txt')); Use only sources you have the rights for.

//ACARS Listen in UDP
$globalACARS = TRUE;
$globalACARSHost = '0.0.0.0'; // Local IP to listen
$globalACARSPort = '9999';
$globalACARSArchive = array('10','80','81','82','3F'); // labels of messages to archive
$globalACARSArchiveKeepMonths = '0';

//APRS configuration (for glidernet)
$globalAPRS = FALSE;					
$globalAPRSversion = $globalName.' using FlightAirMap';
$globalAPRSssid = 'FAM';
$globalAPRSfilter = 'r/'.$globalCenterLatitude.'/'.$globalCenterLongitude.'/250.0';
$globalAPRSarchive = FALSE; // archive track of APRS flights
//User can choose between APRS & SBS1
//$globalMapchoose = FALSE;
//Minimal distance to tell if a flight is arrived to airport (in km)
$globalClosestMinDist = '10';

// To display Squawk usage we need Squawk country for now
$globalSquawkCountry = getenv('FLIGHT_SQUAWK_CO'); //'AU';

//BIT.LY API INFO (used in the search page for a shorter URL)
$globalBitlyAccessToken = ''; //the access token from the bit.ly API

//BRITISH AIRWAYS API INFO
$globalBritishAirwaysKey = '';

// Lufhansa API info
$globalLufthansaKey = '';

// Transavia API info
$globalTransaviaKey = '';

// Default aircraft icon color for 2D map
$globalAircraftIconColor = '1a3151';
// Display altitude in color
$globalMapAltitudeColor = TRUE;
// Size of icon on 2D map ('' for default => 30px if zoom > 7 else 15px)
$globalAircraftSize = '';
//ignore the flights during imports that have the following airports ICAO (departure/arrival) associated with them
$globalAirportIgnore = array();
//accept the flights during imports that have the following airports ICAO (departure/arrival) associated with them
$globalAirportAccept = array();

//ignore the flights that have the following airline ICAO
$globalAirlineIgnore = array();
//accept the flights that have the following airline ICAO
$globalAirlineAccept = array();

//accept the flights that have the following pilot id (only for VA)
$globalPilotIdAccept = array();


// *** Archive ***
//Archive all data
$globalArchive = FALSE;

//Archive data olders than xx months (if globalArchive enabled, else delete) (0 to disable)
$globalArchiveMonths = '0';

//Archive previous year (if globalArchive enabled, else delete)
$globalArchiveYear = FALSE;

//Keep Archive track of flight for xx months (0 to disable)
$globalArchiveKeepTrackMonths = '0';

//Keep Archive of flight for xx months (0 to disable)
$globalArchiveKeepMonths = '0';
// ************************
// Reset stats every year
$globalDeleteLastYearStats = TRUE;
//Calculate height of the geoid above the WGS84 ellipsoid (for source that give altitude based on AMSL)
$globalGeoid = TRUE;
$globalGeoidSource = 'egm96-15';
//NOTAM
$globalNOTAM = FALSE;
$globalNOTAMSource = ''; //URL of your feed from notaminfo.com

//METAR
$globalMETAR = TRUE;
$globalMETARcycle = TRUE; // If update_db.php in cron job, all METAR are downloaded from NOAA
// else put an url as METAR source, can be vatsim.
$globalMETARurl = ''; // Use {icao} to indicate where airport icao must be put in url

//Retrieve private Owner
$globalOwner = FALSE;

// *** Aircraft pics ***
//Retrieve Image from externals sources
$globalAircraftImageFetch = TRUE;
//Check by aircraft ICAO if image is not found by registration
$globalAircraftImageCheckICAO = TRUE;
//Sources for Aircraft image
$globalAircraftImageSources = array('ivaomtl','wikimedia','airportdata','deviantart','flickr','bing','jetphotos','planepictures','planespotters','customsources');
// Custom source configuration {registration} will be replaced by aircraft registration (exif get copyright from exif data for each pic)
// example of config : $globalAircraftImageCustomSources = array('thumbnail' => 'http://pics.myurl.com/thumbnail/{registration}.jpg','original' => 'http://myurl/original/{registration}.jpg','source_website' => 'https://www.myurl.com', 'source' => 'customsite', 'copyright' => 'myself','exif' => true);
// ************************
// *** Marine pics ***
//Retrieve Image from externals sources
$globalMarineImageFetch = TRUE;
//Sources for Marine image
$globalMarineImageSources = array('wikimedia','flickr','deviantart','bing','customsources');
// Custom source configuration {mmsi} will be replaced by vessel mmsi, {name} by it's name (exif get copyright from exif data for each pic)
// example of config : $globalMarineImageCustomSources = array('thumbnail' => 'http://pics.myurl.com/thumbnail/{name}.jpg','original' => 'http://myurl/original/{name}.jpg','source_website' => 'https://www.myurl.com', 'source' => 'customsite', 'copyright' => 'myself','exif' => true);
// ************************


//Retrieve schedules from externals sources (set to FALSE for IVAO or if $globalFork = FALSE)
$globalSchedulesFetch = TRUE;
//Sources for airline schedule if not official airline site
$globalSchedulesSources = array('flightmapper','costtotravel','flightradar24','flightaware');
//Retrieve translation from external sources (set to FALSE for IVAO)
$globalTranslationFetch = TRUE;
//Sources for translation, to find name of flight from callsign
$globalTranslationSources = array();
//Don't display upcoming page
$globalNoUpcoming = FALSE;
//Don't display idents
$globalNoIdents = FALSE;
//Don't display and try to retrieve airlines
$globalNoAirlines = FALSE;
//Display Owners
$globalUseOwner = TRUE;
//Display Pilots
$globalUsePilot = FALSE;
//Show a tooltip for each flights
$globalMapTooltip = FALSE;
//Display ground station on map
$globalMapGroundStation = TRUE;
//Display weather station on map
$globalMapWeatherStation = TRUE;
//Display lightning on map
$globalMapLightning = TRUE;
//Flights accidents support
$globalAccidents = TRUE;
//Fires support
$globalFires = FALSE;
//Display fires on map
$globalMapFires = FALSE;
//Add waypoints to DB
$globalWaypoints = TRUE;
//Support task .tsk xml files as ?tsk=http://path/toto.tsk
$globalTSK = FALSE;
//Display ground altitude
$globalGroundAltitude = FALSE;
// ****** MODES *****
// Aircraft Mode
$globalAircraft = TRUE;
// Marine Mode
$globalMarine = FALSE;
// Tracker Mode
$globalTracker = FALSE;
// Satellite Mode
$globalSatellite = FALSE;
// ************************
// Enable map matching for tracker mode
$globalMapMatching = FALSE;
// Set map matching source (can be fam, graphhopper, osmr or mapbox)
$globalMapMatchingSource = 'fam';
// Set GraphHopper API key
$globalGraphHopperKey = '';
// News feeds
$globalNewsFeeds = array();
// example: $globalNewsFeeds = array('global' => array('en' => array('http://www.mynewsfeed.com/rss')));
// Get result from archive table for search
$globalArchiveResults = TRUE;
?>
