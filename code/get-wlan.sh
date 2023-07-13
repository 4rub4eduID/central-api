#!/bin/bash
source ./.env
input_group=$1
curl --request GET \
     --url ''$api_url'/configuration/v1/wlan/'$input_group'' \
     --header 'accept: application/json' \
     --header 'Authorization: Bearer '$token''