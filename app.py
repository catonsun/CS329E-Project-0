from flask import Flask, render_template, request, redirect, url_for
import os
app = Flask(__name__)

@app.route("/")
def index():
    return render_template("home.html")

@app.route("/upload", methods=['POST', 'GET'])
def upload():
    if request.method == 'POST':
        file = request.files['file']
        filename = file.filename
        file.save(os.path.join('UPLOAD_FOLDER', filename))
        return redirect(url_for('index'))
    return render_template("upload.html")

@app.route("/rules")
def rules():
    return render_template("rules.html")

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/submit")
def submit():
    return render_template("submit.html")


if __name__ == '__main__':
    app.run()

