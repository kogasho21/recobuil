
from django.urls import path


from . import views

#	path(', include(("app.urls", "app"),)),

urlpatterns = [
	path('app', views.main, name='main'),
]
