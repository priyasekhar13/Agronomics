import pandas as pd
import numpy as np
#import matplotlib.pyplot as plt
#import seaborn as sns
from sklearn.metrics import classification_report
from sklearn import metrics
from sklearn import tree
import warnings
warnings.filterwarnings('ignore')

import sys

n_dist=sys.argv[1]
p_season=sys.argv[2]
#k=sys.argv[3]
#t=sys.argv[4]
#h=sys.argv[5]
#p=sys.argv[6]
#r=sys.argv[7]

df = pd.read_csv('crop_production.csv') #aa dataset vundi kada dhani path ivvu

#df.size

#df.shape

#df.columns


features = df[['District_Name', 'Season']]
target = df['Crop']
#labels = df['label']


from sklearn.model_selection import train_test_split
Xtrain, Xtest, Ytrain, Ytest = train_test_split(features,target,test_size = 0.2,random_state =2)

from sklearn.ensemble import RandomForestClassifier

RF = RandomForestClassifier(n_estimators=20, random_state=0)
RF.fit(Xtrain,Ytrain)

#data = np.array([[128,18, 30, 23.603016, 60.3, 6.7, 140.91]])
#prediction = RF.predict(data)
#print(prediction)

data = np.array([[n_dist,p_season]])
prediction = RF.predict(data)
print(prediction)