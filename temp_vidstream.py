import picamera
from picamera import PiCamera
import time

camera = PiCamera()

camera.rotation = 180

camera.resolution = (640, 480)
camera.start_recording('/var/www/PiCamServer/vids/vidstream.h264')
time.sleep(60)
camera.stop_recording()
