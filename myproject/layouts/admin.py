from copy import deepcopy
from django.contrib import admin
from mezzanine.pages.admin import PageAdmin
from django.utils.translation import ugettext_lazy as _
from mezzanine.core.admin import StackedDynamicInlineAdmin

from .models import *
from popups.models import Popup


model_extra_fieldsets = (("", {"fields": ("design", "content", "featured_image")}),
    ("Related Posts", {
    "classes": ("collapse-closed",),
    "fields": ("related_pages",)}))


class SectionInline(StackedDynamicInlineAdmin):
    model = Section
    fieldsets = (("", {"fields": ("title", "content", "image")}),)

class LayoutAdmin(PageAdmin):
    inlines = (SectionInline,)
    fieldsets = deepcopy(PageAdmin.fieldsets) + model_extra_fieldsets

admin.site.register(Layout, LayoutAdmin)
admin.site.register(Popup)
