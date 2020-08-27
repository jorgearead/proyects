#-------------Librerias controlar el bot-------------#
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import subprocess
import urllib3
import recorrido_archivos
#-------------Librerias controlar el bot-------------#
#datos = "https://www.e-facturasaas.com/WebSite/Modulos/Descarga/DescargaCFD.aspx?descarga=FA_1779&tipo=xml"
#---------------------------iniciamos el bot---------------------------#
chrome_path = r"..\chromedriver_win32\chromedriver.exe"
driver = webdriver.Chrome(chrome_path)
driver.get("https://www.e-facturasaas.com/WebSite/Principal.aspx")
agregar_rfc = driver.find_element_by_name("rfc")
agregar_rfc.send_keys("BID130214K43")
agregar_rfc = driver.find_element_by_name("usuario")
agregar_rfc.send_keys("innovation")
agregar_rfc = driver.find_element_by_name("contrasena")
agregar_rfc.send_keys("BID14K43")
driver.find_element_by_id("botonIngresar").click()
driver.get("https://www.e-facturasaas.com/WebSite/Modulos/GeneraManual.aspx")
time.sleep(1)
driver.get("https://www.e-facturasaas.com/WebSite/Modulos/consultaCFDI.aspx")
driver.find_element_by_id("botonCFD").click()#driver.find_element_by_xpath
driver.find_element_by_id("CheckboxTodos").click()
#driver.find_element_by_name("CheckboxTodos").click()
driver.find_element_by_id("Btn_DescargaZip").click()
time.sleep(1)
#---------------------------iniciamos el bot---------------------------#

