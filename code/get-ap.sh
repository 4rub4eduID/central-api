#!/bin/bash
input_SN=$1
input_Token=$2
curl --request GET \
     --url "https://apigw-apaceast.central.arubanetworks.com/configuration/v2/ap_settings/${input_SN}" \
     --header "accept: application/json" \
     --header "Authorization: Bearer $(input_Token)"