import urllib3
import requests
import facebook

token = 'EAADLNJZBNXkYBAF8P8X9pBTePYoMM3ZA2SiR6expk35KbZAZCa7R49ZAaoKZCkHd7ow00UjrcvZASI3MAZCP4A4nunz1J8AfWm8n6iJSMWb8gYWy7QDcllqTbLi6d4xvxG3ZBzP2wz7rj301mZAdBMaCtgs978skAz5NdLOSXx5BH03ZCz9rLS6bZBliNpSTBZClRIaUZD'

graph = facebook.GraphAPI(access_token=token, version = 2.8)
events = graph.request('/search?q=Poetry&type=event&limit=10')

print (events)