#! /bin/sh
raspivid -o - -t 0 -w 1024 -h 720 -b 500000 -fps 20 -n |cvlc -vvv stream:///dev/stdin --sout '#rtp{sdp=rtsp://:8554/}' :demux=h264 
