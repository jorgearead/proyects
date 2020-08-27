#-------------Librerias para generar factura-------------#
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

#---------------------------Para generar una factura---------------------------#
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
time.sleep(5)

#---------------------------Para generar una factura---------------------------#