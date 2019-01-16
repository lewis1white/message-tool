<? include('header.php'); ?>
<?php
$servicekey = $_GET["OTTProgrammeServiceKey"];
$contentid = $_GET["OTTProgrammeContentID"];
$seriesid = $_GET["OTTProgrammeSeriesID"];
$seasonid = $_GET["OTTProgrammeSeasonID"];
$episode = $_GET["OTTProgrammeEpisode"];
$season = $_GET["OTTProgrammeSeason"];
$episodename = $_GET["OTTProgrammeEpisodeName"];
$title = $_GET["OTTProgrammeTitleName"];
$providerid= $_GET["OTTProgrammeProviderID"];
$epgdate = $_GET["OTTProgrammeEPGDateTime"];
$leadservicekey = $_GET["OTTProgrammeLeadServiceKey"];

$data =
'{
  "lastPublishedId": 1,
  "updateEntities": [
    {
      "serviceKey": '. $servicekey .',
      "contentId": "'. $contentid .'",
      "type": "E:S",
      "programmeUuid": "56303aa8-51d4-4eb5-855e-1b1a2aa2154b",
      "vcmId": "8216c2af68a9f410VgnVCM1000000b43150a",
      "providerSeriesId": "'. $seriesid .'",
      "seriesUuid": "82188c52-0c66-499f-84b3-7b4061305b7a",
      "providerSeasonId": "'. $seasonid .'",
      "seasonUuid": "ccad26c8-9984-421b-a24a-4555f0a9383d",
      "fragmentType": "TITLE",
      "localizableInformation": [
        {
          "language": "eng",
          "episodeNumber": '. $episode .',
          "seasonNumber": '. $season .',
          "titleNameBrief": "GameofThrones",
          "episodeName": "'. $episodename .'",
          "episodeNameBrief": "Wintercomes",
          "episodeNameLong": "Episode1:Winteriscoming.",
          "titleNameLong": "GAME OF THRONES",
          "titleNameMedium": "'. $title .'",
          "titleSummaryShort": "Gaming of the massive thrones.",
          "titleSummaryMedium": "Best episode of the fantasy drama, starring Sean Hannity.",
          "seasonNameLong": "Season 1"
        }
      ],
      "priority": 0,
      "images": [
        {
          "checksum": "2fcaae5d1ef22ecb52e478f7cbb6c36c",
          "language": "eng",
          "name": "PRG_1-7842-12_SKYGOIMG06.jpg",
          "size": 713429,
          "usage": "LAND_16_9-SERIES",
          "url": "http://ee1.uk.imageservice.sky.com/contentid/OTTGOTSERIES____/LAND-SERIES",
          "overridden": null
        },
        {
          "checksum": "4a15a346d18679a967090eaa39b3872c",
          "language": "eng",
          "name": "SER_1-7842-12_SKYGOIMG013.jpg",
          "size": 261049,
          "usage": "LAND_16_9-SEASON",
          "url": "http://ee1.uk.imageservice.sky.com/contentid/OTTGOTSEASON____/LAND-SEASON",
          "overridden": null
        },
        {
          "checksum": "4a15a346d18679a967090eaa39b3872c",
          "language": "eng",
          "name": "EPI_1-7842-12_SKYGOIMG02.jpg",
          "size": 261049,
          "usage": "LAND_16_9",
          "url": "http://ee1.uk.imageservice.sky.com/contentid/OTTGOTPROG____/LAND",
          "overridden": null
        }
      ],
      "productionYear": "2014",
      "providerId": "'. $providerid .'",
      "accessChannel": "Sky Atlantic",
      "genre": [
        "3:5",
        "0:0",
        "0:31"
      ],
      "rating": [
        {
          "type": "BSkyBsi",
          "value": "4"
        },
        {
          "type": "BSkyBca",
          "value": "31"
        }
      ],
      "durationMilliseconds": 1152000,
      "rights": {
        "terms": [
          {
            "startDateTime": "2018-03-05T17:00:00.000Z",
            "endDateTime": "2018-10-07T22:59:59.000Z",
            "mediaType": "CUTV",
            "territory": "GB",
            "platformName": "GM",
            "offers": [
              {
                "billingId": "DUMMY",
                "startDateTime": "2017-02-14T10:25:00.000Z",
                "endDateTime": "2017-04-13T22:59:59.000Z",
                "cutvEvents": [
                  {
                    "epgDateTime": "'. $epgdate .'",
                    "leadServiceKey": "'. $leadservicekey .'"
                  }
                ]
              },
              {
                "billingId": "DUMMY",
                "startDateTime": "2017-03-14T10:25:00.000Z",
                "endDateTime": "2017-06-13T22:59:59.000Z",
                "cutvEvents": [
                  {
                    "epgDateTime": "'. $epgdate .'",
                    "leadServiceKey": "'. $leadservicekey .'"
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
