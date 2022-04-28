#! /bin/python3
# Module Imports
import mysql.connector as mariadb
import sys

# Connect to MariaDB Platform
conn = mariadb.connect(
    user="root",
    password="my",
    host="localhost",
    port=3306,
    database="server0"

)

sqlSelect = "select * from phonebook"

# Get Cursor
cur = conn.cursor()

cur.execute(sqlSelect)
 
resultadoSQL = cur.fetchall()

#Cerramos el cursor y la conexión con MySQL
cur.close()
#conexionMySQL.close()
 
#Mostramos el resultado por pantalla
 
print (resultadoSQL)
