<? include('header.php'); ?>
<?php
$key = $_GET["LinearServiceKey"];
$date = $_GET["LinearStartDate"];
$id = $_GET["LinearEventID"];
$name= $_GET["LinearName"];
$uuid = $_GET["LinearProgrammeUUID"];

$data =
'{
  "lastPublishedId": 1634848,
  "updateEntities": [
    {
      "serviceKey": ' . $key . ',
      "eventStartDateTime": "'. $date .'",
      "eventKey": "TP000000000460137192",
      "programmeUuid": "'. $uuid .'",
      "seriesUuid": null,
      "seasonUuid": null,
      "seasonNumber": null,
      "episodeNumber": null,
      "eventId": '. $id .',
      "duration": "01:30:00",
      "subGenreId": 6,
      "genreId": 6,
      "parentalRatingId": 1,
      "soundType": 0,
      "description": "This is really Game of Thrones. A gay lawyer fights against unlawful dismissal with the help of an unscrupulous attorney.",
      "marketingMessage": null,
      "name": "'. $name .'",
      "sortValue": "Philadelphia",
      "resolution": "SD",
      "eventEndDateTime": "2019-11-27T01:05:00Z",
      "trafficKey": "k9Rcf",
      "childrenKey": null,
      "parentKey": null,
      "childOrderNum": null,
      "seriesLinkKey": null,
      "seriesLinkId": null,
      "widescreenFlag": true,
      "subtitleFlag": false,
      "newShowFlag": false,
      "criticsChoiceFlag": false,
      "copyProtectFlag": false,
      "subtitleHearingFlag": true,
      "linkFlag": false,
      "cciByte": 5,
      "ccDescr": "side-load-not-allowed",
      "refSiEventId": null,
      "originalName": "GOT_Philadelphia",
      "originalDescription": "This is really GOT... Oscar-winning drama starring Tom Hanks and Denzel Washington, 1993. A gay lawyer fights against unlawful dismissal with the help of an unscrupulous attorney.",
      "radioChannelFlag": false,
      "unmatchedFlag": false,
      "ippvPurchaseFlag": null,
      "oppvPurchaseFlag": null,
      "territory": null,
      "liveShowFlag": false,
      "eventSegments": null,
      "canBook": true,
      "prices": [],
      "channelGroupId": 4,
      "channelGroupName": "RTE",
      "serviceEventHexId": "Eaf8-4a",
      "serviceName": "RTÉ One +1",
      "programKey": null,
      "uhdFlag": false,
      "parse": null,
      "eventAvailability": null,
      "titleSortOffset": 0,
      "canLink": false,
      "fragmentType": "SCHEDULEDAIRING"
    }
  ],
  "deleteEntities": []
}';


?>

<pre id="jsonInput">
<span class=mono id="Json" contenteditable="false">
<?PHP echo($data); ?>
</span></pre>
