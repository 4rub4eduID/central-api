#!/bin/bash
source ./.env
input_group=$1
input_wlan=$2
input_ssid=$3
input_passphrase=$4
input_vlan=$5
curl --request POST \
     --url ''$api_url'/configuration/v2/wlan/'$input_group'/'$input_wlan'' \
     --header 'accept: application/json' \
     --header 'content-type: application/json' \
     --header 'Authorization: Bearer '$token'' \
     --data '
{
  "wlan": {
    "type": "employee",
    "essid": "'$input_ssid'",
    "vlan": "'$input_vlan'",
    "wpa_passphrase": "'$input_passphrase'",
    "wpa_passphrase_changed": true,
        "access_rules": [
      {
        "action": "allow"
      }
    ]
  }
}
'