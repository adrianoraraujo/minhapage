echo Preparando Ambiente Básico Flask!
curl  -L "https://github.com/adrianoraraujo/flask_base/archive/master.zip" -o base_flask.zip
echo Extraindo base!
"C:\Program Files\7-Zip\7z.exe" e *.zip
echo Instalando python!
curl  -L https://www.python.org/ftp/python/3.6.0/python-3.6.0-amd64.exe -o python.exe
python.exe
echo Instalando pacotes!
Del python.exe
pip install flask
pip install bs4
pip install requests
pip install xlwt
pip install xlrd
pip install flask_sqlalchemy
pip install pymysql
pip install  json
pip install  xlwt
pip install  xlrd
pip install  re
echo Rodando app!
python App.py
pause