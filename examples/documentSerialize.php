<?php

require_once "../vendor/autoload.php";

$data = '
{
    "issuer": {
        "address": {
            "branchID": "1",
            "country": "EG",
            "governate": "Cairo",
            "regionCity": "Nasr City",
            "street": "580 Clementina Key",
            "buildingNumber": "Bldg. 0",
            "postalCode": "68030",
            "floor": "1",
            "room": "123",
            "landmark": "7660 Melody Trail",
            "additionalInformation": "beside Townhall"
        },
        "type": "B",
        "id": "113317713",
        "name": "Issuer Company"
    },
    "receiver": {
        "address": {
            "country": "EG",
            "governate": "Egypt",
            "regionCity": "Mufazat al Ismlyah",
            "street": "580 Clementina Key",
            "buildingNumber": "Bldg. 0",
            "postalCode": "68030",
            "floor": "1",
            "room": "123",
            "landmark": "7660 Melody Trail",
            "additionalInformation": "beside Townhall"
        },
        "type": "B",
        "id": "313717919",
        "name": "Receiver"
    },
    "documentType": "I",
    "documentTypeVersion": "0.9",
    "dateTimeIssued": "2020-10-27T23:59:59Z",
    "taxpayerActivityCode": "4620",
    "internalID": "IID1",
    "purchaseOrderReference": "P-233-A6375",
    "purchaseOrderDescription": "purchase Order description",
    "salesOrderReference": "1231",
    "salesOrderDescription": "Sales Order description",
    "proformaInvoiceNumber": "SomeValue",
    "payment": {
        "bankName": "SomeValue",
        "bankAddress": "SomeValue",
        "bankAccountNo": "SomeValue",
        "bankAccountIBAN": "",
        "swiftCode": "",
        "terms": "SomeValue"
    },
    "delivery": {
        "approach": "SomeValue",
        "packaging": "SomeValue",
        "dateValidity": "2020-09-28T09:30:10Z",
        "exportPort": "SomeValue",
        "countryOfOrigin": "EG",
        "grossWeight": 10.50,
        "netWeight": 20.50,
        "terms": "SomeValue"
    },
    "invoiceLines": [
        {
            "description": "Computer1",
            "itemType": "GPC",
            "itemCode": "10001774",
            "unitType": "EA",
            "quantity": 5,
            "internalCode": "IC0",
            "salesTotal": 947.00,
            "total": 2969.89,
            "valueDifference": 7.00,
            "totalTaxableFees": 817.42,
            "netTotal": 880.71,
            "itemsDiscount": 5.00,
            "unitValue": {
                "currencySold": "EUR",
                "amountEGP": 189.40,
                "amountSold": 10.00,
                "currencyExchangeRate": 18.94
            },
            "discount": {
                "rate": 7,
                "amount": 66.29
            },
            "taxableItems": [
                {
                    "taxType": "T1",
                    "amount": 272.07,
                    "subType": "T1",
                    "rate": 14.00
                },
                {
                    "taxType": "T2",
                    "amount": 208.22,
                    "subType": "T2",
                    "rate": 12
                },
                {
                    "taxType": "T3",
                    "amount": 30.00,
                    "subType": "T3",
                    "rate": 0.00
                },
                {
                    "taxType": "T4",
                    "amount": 43.79,
                    "subType": "T4",
                    "rate": 5.00
                },
                {
                    "taxType": "T5",
                    "amount": 123.30,
                    "subType": "T5",
                    "rate": 14.00
                },
                {
                    "taxType": "T6",
                    "amount": 60.00,
                    "subType": "T6",
                    "rate": 0.00
                },
                {
                    "taxType": "T7",
                    "amount": 88.07,
                    "subType": "T7",
                    "rate": 10.00
                },
                {
                    "taxType": "T8",
                    "amount": 123.30,
                    "subType": "T8",
                    "rate": 14.00
                },
                {
                    "taxType": "T9",
                    "amount": 105.69,
                    "subType": "T9",
                    "rate": 12.00
                },
                {
                    "taxType": "T10",
                    "amount": 88.07,
                    "subType": "T10",
                    "rate": 10.00
                },
                {
                    "taxType": "T11",
                    "amount": 123.30,
                    "subType": "T11",
                    "rate": 14.00
                },
                {
                    "taxType": "T12",
                    "amount": 105.69,
                    "subType": "T12",
                    "rate": 12.00
                },
                {
                    "taxType": "T13",
                    "amount": 88.07,
                    "subType": "T13",
                    "rate": 10.00
                },
                {
                    "taxType": "T14",
                    "amount": 123.30,
                    "subType": "T14",
                    "rate": 14.00
                },
                {
                    "taxType": "T15",
                    "amount": 105.69,
                    "subType": "T15",
                    "rate": 12.00
                },
                {
                    "taxType": "T16",
                    "amount": 88.07,
                    "subType": "T16",
                    "rate": 10.00
                },
                {
                    "taxType": "T17",
                    "amount": 88.07,
                    "subType": "T17",
                    "rate": 10.00
                },
                {
                    "taxType": "T18",
                    "amount": 123.30,
                    "subType": "T18",
                    "rate": 14.00
                },
                {
                    "taxType": "T19",
                    "amount": 105.69,
                    "subType": "T19",
                    "rate": 12.00
                },
                {
                    "taxType": "T20",
                    "amount": 88.07,
                    "subType": "T20",
                    "rate": 10.00
                }
            ]
        },
        {
            "description": "Computer2",
            "itemType": "GPC",
            "itemCode": "10003752",
            "unitType": "EA",
            "quantity": 7,
            "internalCode": "IC0",
            "salesTotal": 662.90,
            "total": 2226.61,
            "valueDifference": 6.00,
            "totalTaxableFees": 621.51,
            "netTotal": 652.90,
            "itemsDiscount": 9.00,
            "unitValue": {
                "currencySold": "EUR",
                "amountEGP": 94.70,
                "amountSold": 5.00,
                "currencyExchangeRate": 18.94
            },
            "discount": {
                "rate": 0,
                "amount": 10.00
            },
            "taxableItems": [
                {
                    "taxType": "T1",
                    "amount": 205.47,
                    "subType": "T1",
                    "rate": 14.00
                },
                {
                    "taxType": "T2",
                    "amount": 157.25,
                    "subType": "T2",
                    "rate": 12
                },
                {
                    "taxType": "T3",
                    "amount": 30.00,
                    "subType": "T3",
                    "rate": 0.00
                },
                {
                    "taxType": "T4",
                    "amount": 32.20,
                    "subType": "T4",
                    "rate": 5.00
                },
                {
                    "taxType": "T5",
                    "amount": 91.41,
                    "subType": "T5",
                    "rate": 14.00
                },
                {
                    "taxType": "T6",
                    "amount": 60.00,
                    "subType": "T6",
                    "rate": 0.00
                },
                {
                    "taxType": "T7",
                    "amount": 65.29,
                    "subType": "T7",
                    "rate": 10.00
                },
                {
                    "taxType": "T8",
                    "amount": 91.41,
                    "subType": "T8",
                    "rate": 14.00
                },
                {
                    "taxType": "T9",
                    "amount": 78.35,
                    "subType": "T9",
                    "rate": 12.00
                },
                {
                    "taxType": "T10",
                    "amount": 65.29,
                    "subType": "T10",
                    "rate": 10.00
                },
                {
                    "taxType": "T11",
                    "amount": 91.41,
                    "subType": "T11",
                    "rate": 14.00
                },
                {
                    "taxType": "T12",
                    "amount": 78.35,
                    "subType": "T12",
                    "rate": 12.00
                },
                {
                    "taxType": "T13",
                    "amount": 65.29,
                    "subType": "T13",
                    "rate": 10.00
                },
                {
                    "taxType": "T14",
                    "amount": 91.41,
                    "subType": "T14",
                    "rate": 14.00
                },
                {
                    "taxType": "T15",
                    "amount": 78.35,
                    "subType": "T15",
                    "rate": 12.00
                },
                {
                    "taxType": "T16",
                    "amount": 65.29,
                    "subType": "T16",
                    "rate": 10.00
                },
                {
                    "taxType": "T17",
                    "amount": 65.29,
                    "subType": "T17",
                    "rate": 10.00
                },
                {
                    "taxType": "T18",
                    "amount": 91.41,
                    "subType": "T18",
                    "rate": 14.00
                },
                {
                    "taxType": "T19",
                    "amount": 78.35,
                    "subType": "T19",
                    "rate": 12.00
                },
                {
                    "taxType": "T20",
                    "amount": 65.29,
                    "subType": "T20",
                    "rate": 10.00
                }
            ]
        }
    ],
    "totalDiscountAmount": 76.29,
    "totalSalesAmount": 1609.90,
    "netAmount": 1533.61,
    "taxTotals": [
        {
            "taxType": "T1",
            "amount": 477.54
        },
        {
            "taxType": "T2",
            "amount": 365.47
        },
        {
            "taxType": "T3",
            "amount": 60.00
        },
        {
            "taxType": "T4",
            "amount": 75.99
        },
        {
            "taxType": "T5",
            "amount": 214.71
        },
        {
            "taxType": "T6",
            "amount": 120.00
        },
        {
            "taxType": "T7",
            "amount": 153.36
        },
        {
            "taxType": "T8",
            "amount": 214.71
        },
        {
            "taxType": "T9",
            "amount": 184.04
        },
        {
            "taxType": "T10",
            "amount": 153.36
        },
        {
            "taxType": "T11",
            "amount": 214.71
        },
        {
            "taxType": "T12",
            "amount": 184.04
        },
        {
            "taxType": "T13",
            "amount": 153.36
        },
        {
            "taxType": "T14",
            "amount": 214.71
        },
        {
            "taxType": "T15",
            "amount": 184.04
        },
        {
            "taxType": "T16",
            "amount": 153.36
        },
        {
            "taxType": "T17",
            "amount": 153.36
        },
        {
            "taxType": "T18",
            "amount": 214.71
        },
        {
            "taxType": "T19",
            "amount": 184.04
        },
        {
            "taxType": "T20",
            "amount": 153.36
        }
    ],
    "totalAmount": 5191.50,
    "extraDiscountAmount": 5.00,
    "totalItemsDiscountAmount": 14.00
}';
$serializeData = \Kindy\EgyaptianEInvoice\Util\Signature::serialize(json_decode($data,true));

echo $serializeData;