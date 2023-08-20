from flask import Flask, request, render_template
import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestClassifier

app = Flask(__name__)

# Load the crop recommendation dataset
df = pd.read_csv('C:/xampp1/htdocs/Agronomics/crop_recommendation.csv')

# Define the machine learning model
RF = RandomForestClassifier(n_estimators=20, random_state=0)
features = df[['N', 'P', 'K', 'temperature', 'humidity', 'ph', 'rainfall']]
target = df['label']
RF.fit(features, target)

@app.route('/', methods=['GET', 'POST'])
def predict_crop():
    if request.method == 'POST':
        n = request.form['n']
        p = request.form['p']
        k = request.form['k']
        temp = request.form['temp']
        humidity = request.form['humidity']
        ph = request.form['ph']
        rainfall = request.form['rainfall']
        data = np.array([[n, p, k, temp, humidity, ph, rainfall]])
        prediction = RF.predict(data)[0]
        return render_template('C:/xampp1/htdocs/Agronomics/index1.html', prediction=prediction)
    else:
        return render_template('C:/xampp1/htdocs/Agronomics/index1.html')


if __name__ == '__main__':
    app.run(debug=True)
