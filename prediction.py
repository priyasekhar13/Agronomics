from __future__ import print_function
import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
import sys

# suppress warning messages
import warnings
warnings.filterwarnings('ignore')


import sys
import traceback

try:
    # read the dataset from the CSV file
    df = pd.read_csv('crop_recommendation.csv')

    # select the features and target variables
    features = df[['N', 'P', 'K', 'temperature', 'humidity', 'ph', 'rainfall']]
    target = df['label']

    # split the dataset into training and testing sets
    Xtrain, Xtest, Ytrain, Ytest = train_test_split(features, target, test_size=0.2, random_state=2)

    # train a random forest classifier on the training data
    RF = RandomForestClassifier(n_estimators=20, random_state=0)
    RF.fit(Xtrain, Ytrain)

    # predict the label for the input data provided via command line arguments
    n = sys.argv[1]
    p = sys.argv[2]
    k = sys.argv[3]
    t = sys.argv[4]
    h = sys.argv[5]
    pH = sys.argv[6]
    r = sys.argv[7]
    data = np.array([[n, p, k, t, h, pH, r]])
    prediction = RF.predict(data)
    print(prediction[0])
except:
    print("Error:", traceback.format_exc())
    sys.exit(1)