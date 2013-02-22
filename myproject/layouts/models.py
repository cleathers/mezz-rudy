from django.db import models
from mezzanine.pages.models import Page
from mezzanine.core.models import RichText, Slugged, Displayable
from mezzanine.core.fields import RichTextField
from django.utils.translation import ugettext_lazy as _
from mezzanine.core.fields import FileField


class Layout(Page, RichText):
    DESIGN_CHOICES = [
        ('1', 'Design One' ),
        ('2', 'Design Two'),
    ]
    design = models.CharField(max_length=255, choices=DESIGN_CHOICES, default="1")
    featured_image = FileField(verbose_name=_("Featured Image"),
                               upload_to="layout", format="Image",
                               max_length=255, null=True, blank=True)
    related_pages = models.ManyToManyField("self", verbose_name=_("Related Pages"), blank=True)

    class Meta:
        verbose_name =_("Layout Template")
        verbose_name_plural = ("Layout Templates")


class Section(Displayable):
    layout = models.ForeignKey(Layout)
    content = RichTextField(_("Content"))
    image = FileField(verbose_name=_("Image"),
                      upload_to="section", format="Image",
                      max_length=255, null=True, blank=True)


