#!/bin/bash

# Check if all three arguments are provided
if [ $# -ne 3 ]; then
    echo "Usage: $0 <URL> <OUTPUT_PATH> <ACCESS_KEY>"
    exit 1
fi

# Assign arguments to variables
URL="$1"
OUTPUT_PATH="$2"
ACCESS_KEY="$3"

# Construct the curl command with URL, access key, and output path
curl "https://api.apiflash.com/v1/urltoimage?access_key=${ACCESS_KEY}&wait_until=page_loaded&url=${URL}" > "${OUTPUT_PATH}"

# Optional: Check if curl command succeeded
if [ $? -ne 0 ]; then
    echo "Error: Curl command failed."
    exit 1
fi

echo "Image saved to ${OUTPUT_PATH}"
