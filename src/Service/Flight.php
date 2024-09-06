<?php

namespace KyteApi\Service;

use KyteApi\DAL\AirportDAL;

class Flight
{

//    public function __construct(protected string $query)
//    {
//    }


    public function autocomplete(mixed $query)
    {
        return AirportDAL::autocomplete($query);
    }


    public function search(mixed $query)
    {





        $response = '
        
        {
    "legs": {
        "OD1": {
            "id": "OD1",
            "departureAirport": "LGW",
            "arrivalAirport": "AMS",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE",
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO",
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1",
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4",
                "QkE6RmxpZ2h0MQ"
            ]
        },
        "OD2": {
            "id": "OD2",
            "departureAirport": "AMS",
            "arrivalAirport": "LGW",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI",
                "QkE6RmxpZ2h0Mg"
            ]
        }
    },
    "flightSolutions": {
        "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC": {
            "id": "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
            "segments": [
                {
                    "id": "U28672-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8672",
                    "duration": 80,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "06:00",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "08:20",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 80,
            "journeyLegId": "OD1"
        },
        "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3": {
            "id": "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
            "segments": [
                {
                    "id": "U28671-AMS-LGW",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8671",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "07:00",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "07:15",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD2"
        },
        "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH": {
            "id": "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
            "segments": [
                {
                    "id": "U28674-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8674",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "08:00",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "10:15",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD1"
        },
        "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4": {
            "id": "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
            "segments": [
                {
                    "id": "U28677-AMS-LGW",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8677",
                    "duration": 80,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "15:00",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "15:20",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 80,
            "journeyLegId": "OD2"
        },
        "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE": {
            "id": "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE",
            "segments": [
                {
                    "id": "U28688-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8688",
                    "duration": 80,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "15:55",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "18:15",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 80,
            "journeyLegId": "OD1"
        },
        "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO": {
            "id": "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO",
            "segments": [
                {
                    "id": "U28682-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8682",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "17:00",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "19:15",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD1"
        },
        "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1": {
            "id": "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1",
            "segments": [
                {
                    "id": "U28684-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8684",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "18:10",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "20:25",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD1"
        },
        "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5": {
            "id": "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5",
            "segments": [
                {
                    "id": "U28683-AMS-LGW",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8683",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "19:15",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "19:30",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD2"
        },
        "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4": {
            "id": "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4",
            "segments": [
                {
                    "id": "U28686-LGW-AMS",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8686",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "20:05",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "22:20",
                        "changeOfDay": 0
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD1"
        },
        "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL": {
            "id": "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL",
            "segments": [
                {
                    "id": "U28685-AMS-LGW",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8685",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "20:10",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "20:25",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD2"
        },
        "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI": {
            "id": "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI",
            "segments": [
                {
                    "id": "U28687-AMS-LGW",
                    "marketingCarrier": {
                        "code": "U2",
                        "name": "easyJet"
                    },
                    "flightNumber": "8687",
                    "duration": 75,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "Amsterdam"
                        },
                        "date": "2024-08-15",
                        "time": "20:55",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "London Gatwick"
                        },
                        "date": "2024-08-15",
                        "time": "21:10",
                        "changeOfDay": 0,
                        "terminal": "North Terminal"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 75,
            "journeyLegId": "OD2"
        },
        "QkE6RmxpZ2h0MQ": {
            "id": "QkE6RmxpZ2h0MQ",
            "segments": [
                {
                    "id": "BA2540-LGW-AMS",
                    "marketingCarrier": {
                        "code": "BA",
                        "name": "British Airways"
                    },
                    "flightNumber": "BA2540",
                    "duration": 90,
                    "departure": {
                        "airport": {
                            "code": "LGW",
                            "name": "GATWICK"
                        },
                        "date": "2024-08-15",
                        "time": "07:35",
                        "changeOfDay": 0,
                        "terminal": "S"
                    },
                    "arrival": {
                        "airport": {
                            "code": "AMS",
                            "name": "AMSTERDAM"
                        },
                        "date": "2024-08-15",
                        "time": "10:05",
                        "changeOfDay": 0
                    },
                    "operatingCarrier": {
                        "code": "A0",
                        "name": "BA Euroflyer"
                    },
                    "aircraft": {
                        "code": "320",
                        "name": "Airbus A320 jet"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 90,
            "journeyLegId": "OD1"
        },
        "QkE6RmxpZ2h0Mg": {
            "id": "QkE6RmxpZ2h0Mg",
            "segments": [
                {
                    "id": "BA2545-AMS-LGW",
                    "marketingCarrier": {
                        "code": "BA",
                        "name": "British Airways"
                    },
                    "flightNumber": "BA2545",
                    "duration": 80,
                    "departure": {
                        "airport": {
                            "code": "AMS",
                            "name": "AMSTERDAM"
                        },
                        "date": "2024-08-15",
                        "time": "19:20",
                        "changeOfDay": 0
                    },
                    "arrival": {
                        "airport": {
                            "code": "LGW",
                            "name": "GATWICK"
                        },
                        "date": "2024-08-15",
                        "time": "19:40",
                        "changeOfDay": 0,
                        "terminal": "S"
                    },
                    "operatingCarrier": {
                        "code": "A0",
                        "name": "BA Euroflyer"
                    },
                    "aircraft": {
                        "code": "320",
                        "name": "Airbus A320 jet"
                    },
                    "status": "ok"
                }
            ],
            "totalDuration": 80,
            "journeyLegId": "OD2"
        }
    },
    "offers": {
        "VTI6T2ZmZXI6NTNkMGE3Y2MtOTJlNS00YTdmLTg5MzEtYjBhNWE0MjdhYzdl": {
            "id": "VTI6T2ZmZXI6NTNkMGE3Y2MtOTJlNS00YTdmLTg5MzEtYjBhNWE0MjdhYzdl",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16358,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11693
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16358,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28672-LGW-AMS",
                        "U28671-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MzhkYmQ2OTgtYjk2ZC00OWQwLTlkZTMtZWZjYmQzYTNmYjZj": {
            "id": "VTI6T2ZmZXI6MzhkYmQ2OTgtYjk2ZC00OWQwLTlkZTMtZWZjYmQzYTNmYjZj",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16978,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12313
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16978,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28672-LGW-AMS",
                        "U28677-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6N2JhMmIzMTctMmE4My00NWJjLTg5YTUtOGJiNzg2NzAzY2Zh": {
            "id": "VTI6T2ZmZXI6N2JhMmIzMTctMmE4My00NWJjLTg5YTUtOGJiNzg2NzAzY2Zh",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16978,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12313
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16978,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28672-LGW-AMS",
                        "U28683-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MDY5YjAzMzUtOTBjYi00NmQ0LThhMTMtYTYxM2E0MGNlNGRh": {
            "id": "VTI6T2ZmZXI6MDY5YjAzMzUtOTBjYi00NmQ0LThhMTMtYTYxM2E0MGNlNGRh",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16605,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11940
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16605,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28672-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6YTQxYWQzZmQtMmEzYy00MzE5LTk4YTctZWFmNTQ0NDY1MDRh": {
            "id": "VTI6T2ZmZXI6YTQxYWQzZmQtMmEzYy00MzE5LTk4YTctZWFmNTQ0NDY1MDRh",
            "flightSolutions": [
                "M00wMUJCQkJQLU0jQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwNjowMDowMFBC",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16729,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12064
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16729,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28672-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6OGNjNmY4YTItZjM4YS00YmE5LTk2NWYtNDI1NDkyZTZhOGNk": {
            "id": "VTI6T2ZmZXI6OGNjNmY4YTItZjM4YS00YmE5LTk2NWYtNDI1NDkyZTZhOGNk",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18220,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13555
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18220,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28671-AMS-LGW",
                        "U28674-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MDA0YmUzNDEtNGFiYy00NzI4LWIyNWMtY2U5OTA5YjA2MTYx": {
            "id": "VTI6T2ZmZXI6MDA0YmUzNDEtNGFiYy00NzI4LWIyNWMtY2U5OTA5YjA2MTYx",
            "flightSolutions": [
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18840,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 14175
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18840,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28674-LGW-AMS",
                        "U28677-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MDg3YTI4YTUtZDE4MS00ZGE2LWIxZjUtMTUwOTY4NDBmOTMz": {
            "id": "VTI6T2ZmZXI6MDg3YTI4YTUtZDE4MS00ZGE2LWIxZjUtMTUwOTY4NDBmOTMz",
            "flightSolutions": [
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18840,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 14175
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18840,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28674-LGW-AMS",
                        "U28683-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NWE4ZTEzOTItMjg2OC00ODNmLWFkMjYtOWUyMzJlNmMzMWQ2": {
            "id": "VTI6T2ZmZXI6NWE4ZTEzOTItMjg2OC00ODNmLWFkMjYtOWUyMzJlNmMzMWQ2",
            "flightSolutions": [
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18467,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13802
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18467,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28674-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MDJmZTY1ZTItMDgyOC00NWEwLWJmYjEtYzYyMDAzY2JkNzIx": {
            "id": "VTI6T2ZmZXI6MDJmZTY1ZTItMDgyOC00NWEwLWJmYjEtYzYyMDAzY2JkNzIx",
            "flightSolutions": [
                "NVAwMUJCQkJQfHwsQkJCQkJCQkJMR1dCQkJDSi5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAwODowMDowMDFH",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:15Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18591,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13926
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18591,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28674-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NTMzNTM1OTMtOGQ3ZC00N2IxLTg2ZjktMDY5NGRmMzcxNDlj": {
            "id": "VTI6T2ZmZXI6NTMzNTM1OTMtOGQ3ZC00N2IxLTg2ZjktMDY5NGRmMzcxNDlj",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18344,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13679
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18344,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28671-AMS-LGW",
                        "U28688-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MThkMjJlM2YtNDcwYi00ZmJkLWFjMDMtYTY2Mjk3ZmI4N2Jk": {
            "id": "VTI6T2ZmZXI6MThkMjJlM2YtNDcwYi00ZmJkLWFjMDMtYTY2Mjk3ZmI4N2Jk",
            "flightSolutions": [
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18964,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 14299
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18964,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28677-AMS-LGW",
                        "U28688-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6ZGRjM2VhOTItM2FhNS00MWQwLWJlNmMtNTAzZTZmNDJkMmQ5": {
            "id": "VTI6T2ZmZXI6ZGRjM2VhOTItM2FhNS00MWQwLWJlNmMtNTAzZTZmNDJkMmQ5",
            "flightSolutions": [
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18964,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 14299
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18964,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28688-LGW-AMS",
                        "U28683-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6Mzg1OWU5ZjgtN2NhZC00NTI1LWE2NDYtYTYyM2U3YWZkNzc1": {
            "id": "VTI6T2ZmZXI6Mzg1OWU5ZjgtN2NhZC00NTI1LWE2NDYtYTYyM2U3YWZkNzc1",
            "flightSolutions": [
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18591,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13926
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18591,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28688-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NmY2NjM2ZmMtYzg4ZC00YmM5LTgwZTctYmU2ODQ0Nzg0NmQz": {
            "id": "VTI6T2ZmZXI6NmY2NjM2ZmMtYzg4ZC00YmM5LTgwZTctYmU2ODQ0Nzg0NmQz",
            "flightSolutions": [
                "NUIwMUJCQkJQLGp3QkJCQkJCQkJMR1dCQkJDSy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAxNTo1NTowMDFE",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 18715,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 14050
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 18715,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28688-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NzU4NTEwMzEtNjcxYy00ZTYzLWFmMzgtNGYxM2VkM2MyYzgy": {
            "id": "VTI6T2ZmZXI6NzU4NTEwMzEtNjcxYy00ZTYzLWFmMzgtNGYxM2VkM2MyYzgy",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16358,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11693
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16358,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28671-AMS-LGW",
                        "U28682-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MDE1NDM4MDItNTJlNy00MjdiLWJhOWUtNWZkNTg3NDlkOTVl": {
            "id": "VTI6T2ZmZXI6MDE1NDM4MDItNTJlNy00MjdiLWJhOWUtNWZkNTg3NDlkOTVl",
            "flightSolutions": [
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16978,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12313
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16978,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28677-AMS-LGW",
                        "U28682-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6MmRhNDg0YjctMmEwZC00OTFiLWJlMzYtNjYwZjgzOWVjODk1": {
            "id": "VTI6T2ZmZXI6MmRhNDg0YjctMmEwZC00OTFiLWJlMzYtNjYwZjgzOWVjODk1",
            "flightSolutions": [
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16978,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12313
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16978,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28682-LGW-AMS",
                        "U28683-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6OTA3YTdhNmEtYWVhMy00ZGYyLWIwMmItYmEwNDFlMGU5MzNj": {
            "id": "VTI6T2ZmZXI6OTA3YTdhNmEtYWVhMy00ZGYyLWIwMmItYmEwNDFlMGU5MzNj",
            "flightSolutions": [
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16605,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11940
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16605,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28682-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6Y2IyMTMyMzEtNTNkNC00YTZhLWFiNzEtMTI4MzQ3NTgyNjM5": {
            "id": "VTI6T2ZmZXI6Y2IyMTMyMzEtNTNkNC00YTZhLWFiNzEtMTI4MzQ3NTgyNjM5",
            "flightSolutions": [
                "MjgwMUJCQkJQeyojQkJCQkJCQkJMR1dCQkJCWy5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxNzowMDowMDFO",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16729,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12064
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16729,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28682-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6M2MxZDFjMjktZjUzYy00ODkwLWE3NGUtZmI4ZWY1YmE3NjE3": {
            "id": "VTI6T2ZmZXI6M2MxZDFjMjktZjUzYy00ODkwLWE3NGUtZmI4ZWY1YmE3NjE3",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 15985,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11320
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 15985,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28671-AMS-LGW",
                        "U28684-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6YTkxZmE0YzUtYmZiNC00MjI0LWI0NzYtODUxZDY1Yjc1YTBj": {
            "id": "VTI6T2ZmZXI6YTkxZmE0YzUtYmZiNC00MjI0LWI0NzYtODUxZDY1Yjc1YTBj",
            "flightSolutions": [
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16605,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11940
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16605,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28677-AMS-LGW",
                        "U28684-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6ZGIyOWVkYWUtNTk5Ny00YzQwLTk2NmItZDgyZjE4MDA4NWNk": {
            "id": "VTI6T2ZmZXI6ZGIyOWVkYWUtNTk5Ny00YzQwLTk2NmItZDgyZjE4MDA4NWNk",
            "flightSolutions": [
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1",
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16605,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11940
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16605,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28684-LGW-AMS",
                        "U28683-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NTVmMDYzYzctY2E4MC00OTJjLTg1NWYtOGFmOWRiMDQ0Yjgy": {
            "id": "VTI6T2ZmZXI6NTVmMDYzYzctY2E4MC00OTJjLTg1NWYtOGFmOWRiMDQ0Yjgy",
            "flightSolutions": [
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16232,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11567
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16232,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28684-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6Mzk0ZTNjMTMtNmExNy00MDc3LThiNWEtNWI2YjJhOTUzNzVk": {
            "id": "VTI6T2ZmZXI6Mzk0ZTNjMTMtNmExNy00MDc3LThiNWEtNWI2YjJhOTUzNzVk",
            "flightSolutions": [
                "NTcwMUJCQkJQLW45QkJCQkJCQkJMR1dCQkJCPS5BTVNDRy5FVVJCQkJCSi5FVVJCaDA2MjAyNC0wOC0xNSAxODoxMDowMFA1",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16356,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 11691
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16356,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28684-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6ZDMxNDM0OGEtOWMxYS00ZjI0LWFhMzQtM2JiZjYyZTMyNzZi": {
            "id": "VTI6T2ZmZXI6ZDMxNDM0OGEtOWMxYS00ZjI0LWFhMzQtM2JiZjYyZTMyNzZi",
            "flightSolutions": [
                "MkQwMUJCQkJQfHxCQkJCQkJCQkJBTVNCQkJDQC5MR1dCfC5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAwNzowMDowMDU3",
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16730,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12065
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16730,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28671-AMS-LGW",
                        "U28686-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6OWY0MGFiZTktMTNlMS00Nzc0LWE2YTMtMWIyMWU3OWM0Yzhj": {
            "id": "VTI6T2ZmZXI6OWY0MGFiZTktMTNlMS00Nzc0LWE2YTMtMWIyMWU3OWM0Yzhj",
            "flightSolutions": [
                "MU0wMUJCQkJQLGpmQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxNTowMDowMDI4",
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 17350,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12685
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 17350,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28677-AMS-LGW",
                        "U28686-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NjllNWE2ZGMtZWZkNS00NTRkLTkyZWMtYmYxOTZlNGMzNjRj": {
            "id": "VTI6T2ZmZXI6NjllNWE2ZGMtZWZkNS00NTRkLTkyZWMtYmYxOTZlNGMzNjRj",
            "flightSolutions": [
                "UkMwMUJCQkJQfEZAQkJCQkJCQkJBTVNCQkJDKi5MR1dCfC5FVVJCQkJCVi5FVVJCJDA3MjAyNC0wOC0xNSAxOToxNTowMDQ5",
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 17350,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12685
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 17350,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28683-AMS-LGW",
                        "U28686-LGW-AMS"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6NGMxZTI1MzEtZDI1NS00ZGY1LWE2N2QtOTRiOTg5ZGFkNDdh": {
            "id": "VTI6T2ZmZXI6NGMxZTI1MzEtZDI1NS00ZGY1LWE2N2QtOTRiOTg5ZGFkNDdh",
            "flightSolutions": [
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4",
                "UTEwMUJCQkJQeyprQkJCQkJCQkJBTVNCQkJDJS5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDoxMDowMDFL"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 16977,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12312
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 16977,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28686-LGW-AMS",
                        "U28685-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "VTI6T2ZmZXI6ZmRiNDZhNTAtYjUzZS00NzYyLWFlNmItYzRjMGM2MmM3NDUy": {
            "id": "VTI6T2ZmZXI6ZmRiNDZhNTAtYjUzZS00NzYyLWFlNmItYzRjMGM2MmM3NDUy",
            "flightSolutions": [
                "NjcwMUJCQkJQO354QkJCQkJCQkJMR1dCQkJDIS5BTVNCZy5FVVJCQkJCSi5FVVJCaDA3MjAyNC0wOC0xNSAyMDowNTowMDE4",
                "MjQwMUJCQkJQLW01QkJCQkJCQkJBTVNCQkJDXi5MR1dCIy5FVVJCQkJCVi5FVVJCJDA2MjAyNC0wOC0xNSAyMDo1NTowMFBI"
            ],
            "singleJourneyLeg": false,
            "expiration": "2024-08-08T11:47:16Z",
            "passengers": [
                {
                    "id": "P1",
                    "type": "adult",
                    "price": 17101,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 12436
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 4665
                        }
                    ]
                }
            ],
            "totalPrice": 17101,
            "currency": {
                "code": "EUR",
                "decimals": 2
            },
            "fares": {
                "Y": {
                    "id": "Y",
                    "name": "Regular",
                    "segments": [
                        "U28686-LGW-AMS",
                        "U28687-AMS-LGW"
                    ],
                    "passengers": [
                        "P1"
                    ],
                    "description": [
                        "\"Our Standard fare (Y) includes one small cabin bag (max. 45 x 36 x 20cm), which must fit under the seat in front.",
                        "Full terms and conditions available at http://www.easyjet.com"
                    ],
                    "fareClass": "Y",
                    "cabinType": "economy",
                    "fareType": [
                        "lowest"
                    ]
                }
            },
            "owner": "U2"
        },
        "QkE6T2ZmZXI6T0YtMDk0YWRkMTEtZjcwYS00NGM2LTlhNmMtZjdkZTk2MjY4NTM3": {
            "id": "QkE6T2ZmZXI6T0YtMDk0YWRkMTEtZjcwYS00NGM2LTlhNmMtZjdkZTk2MjY4NTM3",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 15048,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 5300
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 9748
                        }
                    ]
                }
            ],
            "totalPrice": 15048,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE1": {
                    "id": "FBCODE1",
                    "name": "Economy Basic",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SAME DAY FLT CHNG P2P ONLY",
                        "CHA - SEAT CHOICE",
                        "CHA - 1ST BAG MAX 23KG 51LB 208LCM",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM"
                    ],
                    "fareClass": "V",
                    "cabinType": "economy",
                    "fareBasisCode": "VXZ0K/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE2": {
                    "id": "FBCODE2",
                    "name": "Economy Basic",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SAME DAY FLT CHNG P2P ONLY",
                        "CHA - SEAT CHOICE",
                        "CHA - 1ST BAG MAX 23KG 51LB 208LCM",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM"
                    ],
                    "fareClass": "O",
                    "cabinType": "economy",
                    "fareBasisCode": "OXZ0K/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        },
        "QkE6T2ZmZXI6T0YtZjg2Yjc0MjctNTk4Yi00YzAwLTgwZTAtZGI1Y2U3YTRmYzcw": {
            "id": "QkE6T2ZmZXI6T0YtZjg2Yjc0MjctNTk4Yi00YzAwLTgwZTAtZGI1Y2U3YTRmYzcw",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 18248,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 8500
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 9748
                        }
                    ]
                }
            ],
            "totalPrice": 18248,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE3": {
                    "id": "FBCODE3",
                    "name": "Economy Plus",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM"
                    ],
                    "fareClass": "V",
                    "cabinType": "economy",
                    "fareBasisCode": "VXV2K/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE4": {
                    "id": "FBCODE4",
                    "name": "Economy Plus",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM"
                    ],
                    "fareClass": "O",
                    "cabinType": "economy",
                    "fareBasisCode": "OXV2K/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        },
        "QkE6T2ZmZXI6T0YtOWRhYTU4NjAtNzk4ZC00ODFlLWI3ODQtNDgwOTljNTdmOGM1": {
            "id": "QkE6T2ZmZXI6T0YtOWRhYTU4NjAtNzk4ZC00ODFlLWI3ODQtNDgwOTljNTdmOGM1",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 23248,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 13500
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 9748
                        }
                    ]
                }
            ],
            "totalPrice": 23248,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE5": {
                    "id": "FBCODE5",
                    "name": "Economy Plus select",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM",
                        "INC - CHANGE BEFORE DEPARTURE",
                        "INC - CHANGE AFTER DEPARTURE",
                        "CHA - REFUND BEFORE DEPARTURE"
                    ],
                    "fareClass": "V",
                    "cabinType": "economy",
                    "fareBasisCode": "VXV2KMJ/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE6": {
                    "id": "FBCODE6",
                    "name": "Economy Plus select",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM",
                        "INC - CHANGE BEFORE DEPARTURE",
                        "INC - CHANGE AFTER DEPARTURE",
                        "CHA - REFUND BEFORE DEPARTURE"
                    ],
                    "fareClass": "O",
                    "cabinType": "economy",
                    "fareBasisCode": "OXV2KMJ/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        },
        "QkE6T2ZmZXI6T0YtYmI3YjQ5MmEtYjkzOS00ZWE1LTgwODItZWRiZmVhMTBjNzA3": {
            "id": "QkE6T2ZmZXI6T0YtYmI3YjQ5MmEtYjkzOS00ZWE1LTgwODItZWRiZmVhMTBjNzA3",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 27098,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 17100
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 9998
                        }
                    ]
                }
            ],
            "totalPrice": 27098,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE3": {
                    "id": "FBCODE3",
                    "name": "Economy Plus",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM"
                    ],
                    "fareClass": "V",
                    "cabinType": "economy",
                    "fareBasisCode": "VXV2K/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE7": {
                    "id": "FBCODE7",
                    "name": "Business Club plus",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - LOUNGE ACCESS",
                        "INC - PRIORITY SECURITY",
                        "INC - DEDICATED CHECK IN ZONE",
                        "INC - 2 BAGS MAX 32KG 70LB EACH",
                        "INC - PREMIUM CATERING"
                    ],
                    "fareClass": "I",
                    "cabinType": "business",
                    "fareBasisCode": "IV2K/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        },
        "QkE6T2ZmZXI6T0YtMjA4N2Q5OWEtZTAwNC00NzlkLTgzMTctYmIyMGNlZjU3MDlk": {
            "id": "QkE6T2ZmZXI6T0YtMjA4N2Q5OWEtZTAwNC00NzlkLTgzMTctYmIyMGNlZjU3MDlk",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 29298,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 18000
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 11298
                        }
                    ]
                }
            ],
            "totalPrice": 29298,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE8": {
                    "id": "FBCODE8",
                    "name": "Business Club plus",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - LOUNGE ACCESS",
                        "INC - PRIORITY SECURITY",
                        "INC - DEDICATED CHECK IN ZONE",
                        "INC - 2 BAGS MAX 32KG 70LB EACH",
                        "INC - PREMIUM CATERING"
                    ],
                    "fareClass": "R",
                    "cabinType": "business",
                    "fareBasisCode": "RXV2KV/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE4": {
                    "id": "FBCODE4",
                    "name": "Economy Plus",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "CHA - 2ND BAG MAX 23KG 51LB 208LCM",
                        "NOF - LOUNGE ACCESS",
                        "INC - SNACK",
                        "NOF - PRIORITY SECURITY",
                        "NOF - DEDICATED CHECK IN ZONE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - 1ST BAG MAX 23KG 51LB 208LCM"
                    ],
                    "fareClass": "O",
                    "cabinType": "economy",
                    "fareBasisCode": "OXV2K/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        },
        "QkE6T2ZmZXI6T0YtMWJmOTg3M2EtZTdhNS00ZjI5LWE5ZmQtMjMyMWYyNDgzNmRk": {
            "id": "QkE6T2ZmZXI6T0YtMWJmOTg3M2EtZTdhNS00ZjI5LWE5ZmQtMjMyMWYyNDgzNmRk",
            "flightSolutions": [
                "QkE6RmxpZ2h0MQ",
                "QkE6RmxpZ2h0Mg"
            ],
            "expiration": "2024-08-08T12:02:16.220Z",
            "passengers": [
                {
                    "id": "SH1",
                    "type": "adult",
                    "price": 38148,
                    "priceBreakdown": [
                        {
                            "code": "BASE",
                            "type": "base",
                            "amount": 26600
                        },
                        {
                            "code": "TAX",
                            "type": "tax",
                            "amount": 11548
                        }
                    ]
                }
            ],
            "totalPrice": 38148,
            "currency": {
                "code": "GBP",
                "decimals": "2"
            },
            "fares": {
                "FBCODE7": {
                    "id": "FBCODE7",
                    "name": "Business Club plus",
                    "segments": [
                        "BA2545-AMS-LGW"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - LOUNGE ACCESS",
                        "INC - PRIORITY SECURITY",
                        "INC - DEDICATED CHECK IN ZONE",
                        "INC - 2 BAGS MAX 32KG 70LB EACH",
                        "INC - PREMIUM CATERING"
                    ],
                    "fareClass": "I",
                    "cabinType": "business",
                    "fareBasisCode": "IV2K/Y",
                    "fareType": [
                        "public"
                    ]
                },
                "FBCODE8": {
                    "id": "FBCODE8",
                    "name": "Business Club plus",
                    "segments": [
                        "BA2540-LGW-AMS"
                    ],
                    "passengers": [
                        "SH1"
                    ],
                    "description": [
                        "CHA - CHANGE BEFORE DEPARTURE",
                        "CHA - CHANGE AFTER DEPARTURE",
                        "NOF - REFUND BEFORE DEPARTURE",
                        "NOF - REFUND AFTER DEPARTURE",
                        "CHA - SEAT CHOICE",
                        "INC - CABIN BAG MAX 23KG 51LB 126LCM",
                        "INC - LAPTOP HANDBAG MAX 23KGS 85LCM",
                        "INC - SAME DAY FLT CHNG P2P ONLY",
                        "INC - LOUNGE ACCESS",
                        "INC - PRIORITY SECURITY",
                        "INC - DEDICATED CHECK IN ZONE",
                        "INC - 2 BAGS MAX 32KG 70LB EACH",
                        "INC - PREMIUM CATERING"
                    ],
                    "fareClass": "R",
                    "cabinType": "business",
                    "fareBasisCode": "RXV2KV/Y",
                    "fareType": [
                        "public"
                    ]
                }
            },
            "owner": "BA",
            "priceGuaranteeExpiration": "2024-08-08T12:02:16.220Z"
        }
    },
    "errors": [
        {
            "code": "AIRLINE_SERVICE_ERROR",
            "message": "Route Not Valid for Requested Carrier(s)",
            "source": "AA"
        },
        {
            "code": "SEARCH_ERROR",
            "message": "Airline response contains errors",
            "source": "AA"
        }
    ],
    "warnings": [
        {
            "message": "WARNING",
            "code": "If you pay using a corporate credit card, you will be charged a surcharge fee of up to 1.75% (up to a maximum of GBP20.00 per person, per transaction). The actual amount of the fee will be stated in the OfferPrice API response",
            "source": "BA"
        }
    ],
    "possibleActions": {
        "/api/v3/shop/bundles": {
            "U2": "action1"
        },
        "/api/v3/shop/offer-details": {
            "U2": "action2",
            "BA": "action5"
        },
        "/api/v3/shop/ancillaries": {
            "U2": "action3",
            "BA": "action6"
        },
        "/api/v3/book/{offerId}": {
            "U2": "action4"
        },
        "/api/v3/book": {
            "BA": "action7"
        }
    },
    "actionList": {
        "action1": {
            "type": "optional",
            "timeLimit": "2024-08-08T11:47:15Z"
        },
        "action2": {
            "type": "optional",
            "timeLimit": "2024-08-08T11:47:15Z"
        },
        "action3": {
            "type": "optional",
            "timeLimit": "2024-08-08T11:47:15Z",
            "requestedItems": {
                "sportsEquipment": "optional",
                "seat": "optional",
                "bag": "optional"
            }
        },
        "action4": {
            "type": "mandatory",
            "timeLimit": "2024-08-08T11:47:15Z"
        },
        "action5": {
            "type": "optional",
            "timeLimit": "2024-08-08T12:02:16.220Z"
        },
        "action6": {
            "type": "optional",
            "timeLimit": "2024-08-08T12:02:16.220Z",
            "requestedItems": {
                "seat": "optional",
                "bag": "optional"
            }
        },
        "action7": {
            "type": "mandatory",
            "timeLimit": "2024-08-08T12:02:16.220Z"
        }
    }
}     
        ';




// Decode the JSON response
        $data = json_decode($response, true);

        $offers = $data['offers'];
        $flightSolutions = $data['flightSolutions'];
        $legs = $data['legs'];

// Process each offer
        foreach ($offers as $offerId => $offer) {
            echo "Offer ID: $offerId\n";
            echo "Expiration: " . $offer['expiration'] . "\n";
            echo "Total Price: " . $offer['totalPrice'] . " " . $offer['currency']['code'] . "\n";

            // Process each flight solution
            foreach ($offer['flightSolutions'] as $solutionId) {
                $flightSolution = $flightSolutions[$solutionId];
                echo "  Flight Solution ID: $solutionId\n";
                echo "  Total Duration: " . $flightSolution['totalDuration'] . " minutes\n";
                echo "  Journey Leg ID: " . $flightSolution['journeyLegId'] . "\n";

                // Get the journey leg details
                $journeyLeg = $legs[$flightSolution['journeyLegId']];
                echo "  Journey Leg Details:\n";
                echo "    Departure Airport: " . $journeyLeg['departureAirport'] . "\n";
                echo "    Arrival Airport: " . $journeyLeg['arrivalAirport'] . "\n";
                echo "    Flight Solutions: " . implode(', ', $journeyLeg['flightSolutions']) . "\n";

                // Process each segment in the flight solution
                foreach ($flightSolution['segments'] as $segment) {
                    echo "    Segment ID: " . $segment['id'] . "\n";
                    echo "    Flight Number: " . $segment['flightNumber'] . "\n";
                    echo "    Marketing Carrier: " . $segment['marketingCarrier']['name'] . " (" . $segment['marketingCarrier']['code'] . ")\n";
                    echo "    Departure: " . $segment['departure']['date'] . " " . $segment['departure']['time'] . " at " . $segment['departure']['airport']['name'] . " (" . $segment['departure']['airport']['code'] . ")\n";
                    echo "    Arrival: " . $segment['arrival']['date'] . " " . $segment['arrival']['time'] . " at " . $segment['arrival']['airport']['name'] . " (" . $segment['arrival']['airport']['code'] . ")\n";
                    echo "    Aircraft: " . $segment['aircraft']['name'] . " (" . $segment['aircraft']['code'] . ")\n";
                }
            }
        }














        var_dump($query, "asdadsd");die();

        $curl = curl_init();

        $journeys = [];

        foreach ($query->journeys as $journey) {
            $journeys[] = [
                "departureAirport" => $journey->departureAirport,
                "arrivalAirport" => $journey->arrivalAirport,
                "date" => [
                    "main" => $journey->date->main
                ]
            ];
        }

        $requestData = [
            "journeys" => $journeys,
            "cabinType" => $query->cabinType,
            "nonStopFlight" => true,
            "exactMatch" => true,
            "flexibility" => "lowest",
            "passengers" => $query->passengers
        ];

        $jsonRequestData = json_encode($requestData);

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonRequestData,
            CURLOPT_HTTPHEADER => array(
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump(json_decode($response), "stex enq"); die();

        return json_decode($response);
    }


//    public function search(mixed $query)
//    {
////        try {
////        $apiConfig = $this->getApiConfig();
////        $url = $apiConfig['url'] . "/hotel-api/1.0/bookings/" . $reference;
////        $headers = [
////            "Accept: application/json",
////            "Accept-Encoding: gzip",
////            "Api-key: " . $apiConfig['key'],
////            "Postman-Token: f9ecfcc4-0913-417b-8045-2b061cc22577",
////            "X-Signature: " . hash("sha256", $apiConfig['key'] . $apiConfig['secret'] . time()),
////            "cache-control: no-cache"
////        ];
////
////        $response = $this->makeCurlRequest($url, $headers, "GET");
////
////        $bookingDetail = json_decode($response, false, 512, JSON_THROW_ON_ERROR);
////        $this->result['book'] = $bookingDetail->booking;
////
//////            dd($this->result['book']);
////        $this->result['hotelDetails'] = $this->getHotelDetailing($bookingDetail->booking->hotel->code);
////
////        $this->renderView("Pages/accountbookinfo", "accountbookinfo", $this->result);
////    } catch (Exception $e) {
////        $this->handleException($e, __METHOD__);
////    }
////var_dump($query->originIataCode);die();
////        var_dump($query);die();
////        var_dump(gettype($query->passengers), "123");die();
//
//        $curl = curl_init();
//        $journeyDetails = [
//            "departureAirport" => $query->originIataCode,
//            "arrivalAirport" => $query->destinationIataCode,
//
//            "date" => [
//                "main" => "2024-08-29",
//                "flexibilityRange"=> 2
//            ]
//        ];
//        $requestData = [
//            "journeys" => [$journeyDetails],
//            "cabinType" => $query->cabinType,
//            "nonStopFlight" => true,
//            "exactMatch" => true,
//            "flexibility" => "lowest",
//            "passengers" => $query->passengers
//        ];
//
//        $jsonRequestData = json_encode($requestData);
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop',
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS =>$jsonRequestData,
//
//
//    CURLOPT_HTTPHEADER => array(
//        'x-api-key: 6ef519972eaf4e11865b662325af5a8d',
//        'Content-Type: application/json'
//    ),
//));
//
//
//
//$response = curl_exec($curl);
//
//curl_close($curl);
//
//
//
////var_dump(json_decode($response), "bar");die();
//return json_decode($response);
//
//    }
    public function offerDetails(mixed $query){

        $postData = [
            'offerIds' => [$query]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/offer-details',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump($response, json_decode($response), "bar");die();
        return json_decode($response);
    }

    public function shopBundles(mixed $query){

        $postData = [
            'offerIds' => [$query]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/bundles',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump($response, json_decode($response), "bar");die();
        return json_decode($response);
    }


    public function shopAncillaries(mixed $query){

        $postData = [
            'requestedTypes' => [
                "bag",
                "seat",
                "meal",
                "sportsEquipment",
                "service",
                "bundle"
            ]
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sandbox.gokyte.com/api/v3/flights/shop/ancillaries/'.$query,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-api-key: 6ef519972eaf4e11865b662325af5a8d'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

//        var_dump( json_decode($response), "bar");die();
        return json_decode($response);
    }



}
