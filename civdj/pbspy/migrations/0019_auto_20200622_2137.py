# Generated by Django 2.2 on 2020-06-22 21:37

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('pbspy', '0018_remove_game_subscribed_users'),
    ]

    operations = [
        migrations.RenameField(
            model_name='game',
            old_name='subscribed_users_new',
            new_name='subscribed_users',
        ),
    ]