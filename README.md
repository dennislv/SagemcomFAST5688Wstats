# hdhrxml.php
Simple script to grab stats from a T-Mobile Sagemcom FAST5688W 5G modem. Other scripts seem to include way too many libraries to do such simple requests.

## Setup
### You only need to modify 1 variable to specify your modem's password.
If you haven't changed it, its on the back sticker.

```php
$password = 'from.the.back.sticker';
```

## Rebooting
After gathering your statistics, you can set the $reboot variable true to make a curl request to restart your modem.
```php
$reboot = true;
```

## Use at your own risk
This was written for my own purposes, therefore there is no error checking. I've been asked to share, so I've posted it here. Lots of things could be done better, but this works and serves its purpose.


## Purpose
I do further processing and pass them on to an MQTT server. You can do what you want with them.


## Results
````
***** AUTH *****
Array
(
    [auth] => Array
        (
            [token] => xxxxxxxxxxxxxxxxx
            [expiration] => 1715702850
            [refreshCountMax] => 4
            [refreshCountLeft] => 4
        )

)


***** GATEWAY *****
Array
(
    [device] => Array
        (
            [type] => HSID
            [manufacturer] => Sagemcom
            [manufacturerOUI] => 001556
            [name] => 5G Gateway
            [friendlyName] => 5G Gateway
            [isEnabled] => 1
            [index] => 0
            [isMeshSupported] =>
            [hardwareVersion] => 1.0
            [softwareVersion] => SGJi10205-1.2.B4
            [model] => FAST5688W
            [serial] => xxxxxxxxxxxxxxxxx
            [macId] => xxxxxxxxxxxxxxxxx
            [updateState] => latest
            [role] => Gateway
        )

    [time] => Array
        (
            [upTime] => 1754622
            [localTime] => 1715701950
            [localTimeZone] => -08:00
            [daylightSavings] => Array
                (
                    [isUsed] => 1
                )

        )

    [signal] => Array
        (
            [generic] => Array
                (
                    [apn] => FBB.HOME
                    [roaming] =>
                    [registration] => registered
                    [hasIPv6] => 1
                )

            [4g] => Array
                (
                    [eNBID] => xxxxxxxxxxxxxxxxx
                    [cid] => 8
                    [sinr] => 16
                    [rsrp] => -69
                    [rsrq] => -10
                    [rssi] => -40
                    [bands] => Array
                        (
                            [0] => b2
                        )

                    [bars] => 5
                )

            [5g] => Array
                (
                    [gNBID] => 0
                    [cid] => 0
                    [sinr] => 40
                    [rsrp] => -72
                    [rsrq] => -11
                    [rssi] => -117
                    [bands] => Array
                        (
                            [0] => n41
                        )

                    [bars] => 5
                )

        )

)


***** TELEMETRY *****
Array
(
    [cell] => Array
        (
            [5g] => Array
                (
                    [pci] => xxxxxxxxxxxxxxxxx
                    [ecgi] => xxxxxxxxxxxxxxxxx
                    [tac] => 0
                    [mcc] => xxxxxxxxxxxxxxxxx
                    [mnc] => xxxxxxxxxxxxxxxxx
                    [plmn] => xxxxxxxxxxxxxxxxx
                    [earfcn] => xxxxxxxxxxxxxxxxx
                    [bandwidth] => 200M
                    [cqi] => 0
                    [status] => 1
                    [supportedBands] => Array
                        (
                            [0] => n25
                            [1] => n41
                            [2] => n48
                            [3] => n66
                            [4] => n71
                            [5] => n77
                        )

                    [preferredRadioBands] => Array
                        (
                            [0] => n41
                            [1] => n71
                        )

                    [sector] => Array
                        (
                            [gNBID] => 0
                            [cid] => 0
                            [sinr] => 40
                            [rsrp] => -72
                            [rsrq] => -11
                            [rssi] => -117
                            [bands] => Array
                                (
                                    [0] => n41
                                )

                            [bars] => 5
                        )

                )

            [4g] => Array
                (
                    [pci] => xxxxxxxxxxxxxxxxx
                    [ecgi] => xxxxxxxxxxxxxxxxx
                    [tac] => xxxxxxxxxxxxxxxxx
                    [mcc] => xxxxxxxxxxxxxxxxx
                    [mnc] => xxxxxxxxxxxxxxxxx
                    [plmn] => xxxxxxxxxxxxxxxxx
                    [earfcn] => xxxxxxxxxxxxxxxxx
                    [bandwidth] => 15M
                    [cqi] => 13
                    [status] => 1
                    [supportedBands] => Array
                        (
                            [0] => b2
                            [1] => b4
                            [2] => b5
                            [3] => b12
                            [4] => b25
                            [5] => b26
                            [6] => b41
                            [7] => b46
                            [8] => b66
                            [9] => b71
                        )

                    [preferredRadioBands] => Array
                        (
                            [0] => b2
                            [1] => b4
                            [2] => b5
                            [3] => b12
                            [4] => b25
                            [5] => b26
                            [6] => b46
                            [7] => b66
                            [8] => b71
                        )

                    [sector] => Array
                        (
                            [eNBID] => xxxxxxxxxxxxxxxxx
                            [cid] => 8
                            [sinr] => 16
                            [rsrp] => -69
                            [rsrq] => -10
                            [rssi] => -40
                            [bands] => Array
                                (
                                    [0] => b2
                                )

                            [bars] => 5
                        )

                )

            [generic] => Array
                (
                    [apn] => FBB.HOME
                    [roaming] =>
                    [registration] => registered
                    [hasIPv6] => 1
                )

            [gps] => Array
                (
                    [latitude] => xxxxxxxxxxxxxxxxx
                    [longitude] => xxxxxxxxxxxxxxxxx
                )

        )

    [neighbors] => Array
        (
            [0] => Array
                (
                    [rsrp] => -69
                    [rsrq] => -13
                    [bars] => 5
                    [rssi] => -117
                    [sinr] => -19
                    [bands] => Array
                        (
                            [0] => b2
                        )

                    [cid] => 8
                    [eNBID] => xxxxxxxxxxxxxxxxx
                )

            [1] => Array
                (
                    [rsrp] => -71
                    [rsrq] => -8
                    [bars] => 5
                    [rssi] => -117
                    [sinr] => -19
                    [bands] => Array
                        (
                            [0] => b12
                        )

                    [cid] => 5
                    [eNBID] => xxxxxxxxxxxxxxxxx
                )

            [2] => Array
                (
                    [rsrp] => -73
                    [rsrq] => -7
                    [bars] => 5
                    [rssi] => -117
                    [sinr] => -19
                    [bands] => Array
                        (
                            [0] => b4
                        )

                    [cid] => 2
                    [eNBID] => xxxxxxxxxxxxxxxxx
                )

        )

    [sim] => Array
        (
            [status] => 1
            [imei] => xxxxxxxxxxxxxxxxx
            [imsi] => xxxxxxxxxxxxxxxxx
            [iccId] => xxxxxxxxxxxxxxxxx
            [msisdn] => xxxxxxxxxxxxxxxxx
        )

    [clients] => Array
        (
            [ethernet] => Array
                (
                    [0] => Array
                        (
                            [ipv4] => 192.168.12.2
                            [ipv6] => Array
                                (
                                )

                            [mac] => xxxxxxxxxxxxxxxxx
                            [connected] => 1
                            [name] =>
                        )

                )

        )

    [acs] => Array
        (
            [checkin] => 1715691374
        )

)


***** WIFI *****
Array
(
    [2.4ghz] => Array
        (
            [isRadioEnabled] =>
            [mode] => auto
            [airtimeFairness] => 1
            [channelBandwidth] => Auto
            [channel] => Auto
            [transmissionPower] => 100%
            [isWMMEnabled] => 1
            [isMUMIMOEnabled] => 1
            [maxClients] => 128
        )

    [5.0ghz] => Array
        (
            [isRadioEnabled] =>
            [mode] => auto
            [airtimeFairness] => 1
            [channelBandwidth] => Auto
            [channel] => Auto
            [transmissionPower] => 100%
            [isWMMEnabled] => 1
            [isMUMIMOEnabled] => 1
            [maxClients] => 128
        )

    [ssids] => Array
        (
            [0] => Array
                (
                    [ssidName] => t
                    [wpaKey] => xxxxxxxxxxxxxxxxx
                    [guest] =>
                    [isBroadcastEnabled] => 1
                    [encryptionVersion] => WPA2/WPA3
                    [encryptionMode] => AES
                    [2.4ghzSsid] =>
                    [5.0ghzSsid] => 1
                )

        )

    [bandSteering] => Array
        (
            [isEnabled] =>
        )

)
````
