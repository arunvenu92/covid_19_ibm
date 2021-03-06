import pandas as pd
import preprocessor as p
from langdetect import detect_langs
import re
import json
import sys
from ibm_watson import NaturalLanguageUnderstandingV1
from ibm_cloud_sdk_core.authenticators import IAMAuthenticator
from ibm_watson.natural_language_understanding_v1 import Features, EntitiesOptions

def filtering_data():
    df=pd.read_csv('Sample_input.csv')
    tweets = df.set_index('status_id',drop=False)
    for index,row in tweets.iterrows():
        words_=[]
        phone_no=[]
        hashtag=[]
        text=row['text']
        if str(detect_langs(text)[0])[0:2] == 'en':
            p.set_options(p.OPT.URL, p.OPT.EMOJI, p.OPT.SMILEY)
            text=p.clean(text)
            text=text.lower().replace('.',' ').replace(',',' ').replace('?','').replace('!',' ')
            words=text.split()
            words=set(words)
            words=list(words)
            for w in words:
                if re.match('^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1}){0,1}0{0,1}[1-9]{1}[0-9]{9}$',w):
                    phone_no.append(w)
                if w.startswith('#'):
                    hashtag.append(w)
            print(text)
            print(phone_no)
            print(hashtag)

def processML():
      authenticator = IAMAuthenticator('')
	  natural_language_understanding = NaturalLanguageUnderstandingV1(version='2019-07-12',authenticator=authenticator)
      natural_language_understanding.set_service_url('https://api.eu-de.natural-language-understanding.watson.cloud.ibm.com/instances/cc061342-790c-4da5-a294-0609b9312b49')
      response = natural_language_understanding.analyze(text=str('Need volunteers for distributing masks in Coimbatore'),
      features=Features(entities=EntitiesOptions(sentiment=True,limit=10,model=''))).get_result()
      print(json.dumps(response, indent=2))

filtering_data()
processML()

#Get Input data from Speech to Text or Twitter

#Clean the data using filtering data

#process the data using process ML

#invokde decision maker functions 
	#Convert the json to python object
	#use the confidance parameter to decide whether it is EMERGENCY request or Request or Volunteer

#Create a custom JSON with name, text, decision, latitude and longitude,phone number

#Use the custom JSON to call the funtion to persist in DB




