from django.db import models

# Create your models here.
class NameRegister(models.Model):
    name = models.CharField(max_length=200)
    # pub_date = models.DateTimeField('date published')
