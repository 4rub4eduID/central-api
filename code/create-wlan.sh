curl --request POST \
     --url https://apigw-apaceast.central.arubanetworks.com/configuration/v2/wlan/Test-AP/Test-API \
     --header 'accept: application/json' \
     --header 'content-type: application/json' \
     --header "Authorization: Bearer $" \
     --data '
{
  "wlan": {
    "type": "employee",
    "essid": "TEST-API",
    "wpa_passphrase": "1234567890",
    "vlan": "70",
    "hide_ssid": false,
    "wpa_passphrase_changed": false,
    "is_locked": false
  }
}
'