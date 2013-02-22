import os
import sys
from django.core.handlers.wsgi import WSGIHandler

sys.stdout = sys.stderr

from site import addsitedir
addsitedir('/home/webpowerlabs/envs/mezz_safe/lib/python2.7/site-packages')

from os.path import abspath, dirname, join
from django.conf import settings


os.environ['DJANGO_SETTINGS_MODULE'] = 'myproject.settings'
sys.path.insert(0, join(settings.PROJECT_ROOT, "apps"))
application = WSGIHandler()
