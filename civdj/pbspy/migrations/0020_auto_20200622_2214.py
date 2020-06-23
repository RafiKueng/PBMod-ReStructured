# Generated by Django 2.2 on 2020-06-22 22:14

from django.conf import settings
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('pbspy', '0019_auto_20200622_2137'),
    ]

    operations = [
        migrations.AlterField(
            model_name='game',
            name='subscribed_users',
            field=models.ManyToManyField(blank=True, related_name='subscribed_games', through='pbspy.MailSubscribing', to=settings.AUTH_USER_MODEL),
        ),
    ]