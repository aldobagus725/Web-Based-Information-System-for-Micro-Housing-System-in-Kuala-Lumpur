# Generated by Selenium IDE
import pytest
import time
import json
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

class TestViewAllocationUser():
  def setup_method(self, method):
    self.driver = webdriver.Chrome()
    self.vars = {}
  
  def teardown_method(self, method):
    self.driver.quit()
  
  def test_viewAllocationUser(self):
    self.driver.get("http://localhost:8000/")
    self.driver.set_window_size(1144, 760)
    self.driver.find_element(By.LINK_TEXT, "Login").click()
    self.driver.find_element(By.ID, "username").click()
    self.driver.find_element(By.ID, "username").send_keys("wulan")
    self.driver.find_element(By.ID, "password").click()
    self.driver.find_element(By.ID, "password").send_keys("12345678")
    self.driver.find_element(By.CSS_SELECTOR, ".btn-primary").click()
    self.driver.find_element(By.CSS_SELECTOR, ".row:nth-child(5) > .col").click()
    self.driver.find_element(By.CSS_SELECTOR, ".table:nth-child(2) tr").click()
    self.driver.find_element(By.CSS_SELECTOR, ".row:nth-child(5) > .col").click()
    self.driver.find_element(By.CSS_SELECTOR, ".row:nth-child(5) > .col").click()
    self.driver.find_element(By.CSS_SELECTOR, ".row:nth-child(5) > .col").click()
    self.driver.find_element(By.ID, "navbardrop").click()
    self.driver.find_element(By.LINK_TEXT, "Logout").click()
  
