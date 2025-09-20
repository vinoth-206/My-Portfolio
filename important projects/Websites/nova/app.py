from flask import Flask, render_template,request
import mysql.connector

app = Flask(__name__)

conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="", #change this
    database="nove"
)

cursor = conn.cursor()  

@app.route('/')
def login():
    return render_template('login.html')

@app.route('/login', methods=['POST'])
def register():
    username = request.form['username']
    password = request.form['password']
    Phone  = request.form['Phone ']
    cursor.execute("INSERT INTO mobiles(Uname,Upass,Upho) values(%s,%s,%s)", (username, password, number))
    conn.commit()
    return "Login successful"

    if __name__ == '__main__':
        app.run(debug=True)
    
  