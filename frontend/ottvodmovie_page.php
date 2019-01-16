<? include('header.php'); ?>
<?php
$contentid = $_GET["OTTMovieContentID"];
$year = $_GET["OTTMovieProductionYear"];
$title = $_GET["OTTMovieTitle"];
$providerid= $_GET["OTTMovieProviderID"];
$epgdate = $_GET["OTTMovieEPGDateTime"];
$servicekey = $_GET["OTTMovieServiceKey"];

$data =
'{
  "lastPublishedId": 1,
  "updateEntities": [
    {
      "serviceKey": 5678,
      "contentId": "'. $contentid .'",
      "type": "M:E",
      "programmeUuid": "1b8a6037-8bc3-4b17-bce9-5ea48a3b2f92",
      "fragmentType": "TITLE",
      "localizableInformation": [
        {
          "titleNameBrief": "ToppyGunnay",
          "titleNameMedium": "'. $title .'",
          "titleNameLong": "Top Gun",
          "language": "eng",
          "titleSummaryShort": "Top gunners",
          "titleSummaryMedium": "Tom cruise looses badly",
          "titleSummaryLong": "Quiz show hosted by Bradley Walsh. Emma, Victor, Geoff and Lucy take on the chaser in a battle of wits."
        }
      ],
      "priority": 0,
      "images": [
        {
          "checksum": "2fcaae5d1ef22ecb52e478f7cbb6c36c",
          "language": "eng",
          "name": "PRG_1-7842-12_SKYGOIMG01.jpg",
          "size": 713426,
          "usage": "COVER",
          "url": "http://images.upload.metadata.sky.com:80/upload/int/64aea9e2-3ee0-4387-9ce6-ebcd59869a07-tom.jpeg",
          "overridden": null
        }],
        "productionYear": "'. $year .'",
        "providerId": "'. $providerid .'",
        "accessChannel": "RTE",
        "genre": [
          "6:1"
        ],
        "rating": [
          {
            "type": "BSkyBsi",
            "value": "3"
          },
          {
            "type": "BSkyBca",
            "value": "5"
          },
          {
            "type": "BSkyBca",
            "value": "31"
          }
        ],
        "durationMilliseconds": 4152000,
        "rights": {
          "terms": [
            {
              "startDateTime": "2015-09-07T17:00:00.000Z",
              "endDateTime": "2015-10-07T22:59:59.000Z",
              "territory": "GB",
              "platformName": "GM",
              "offers": [
                {
                  "billingId": "DUMMY",
                  "startDateTime": "2019-09-14T10:25:00.000Z",
                  "endDateTime": "2019-10-13T22:59:59.000Z",
                  "cutvEvents": [
                    {
                      "epgDateTime": "'. $epgdate .'",
                      "leadServiceKey": "'. $servicekey .'"
                    },
                    {
                      "epgDateTime": "'. $epgdate .'",
                      "leadServiceKey": "'. $servicekey .'"
                    }
                  ]
                }
              ]
            }
          ]
        }
      }
    ],
    "deleteEntities": []
  }';


  ?>

  <pre id="jsonInput">
  <span class=mono id="Json" contenteditable="false">
  <?PHP echo($data); ?>
  </span></pre>
