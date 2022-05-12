from telegram.ext import Updater, CommandHandler, MessageHandler, Filters
import  telegram

# Define a few command handlers. These usually take the two arguments update and
# context. Error handlers also receive the raised TelegramError object in error.
def start(update, context):
    """Send a message when the command /start is issued."""
    update.message.reply_text('Hi!')
def help_command(update, context):
    """Send a message when the command /help is issued."""
    update.message.reply_text('Help!')
def echo(update, context):
    """Echo the user message."""
    if update.message.chat.id == -1001361659303 : #for group
        #update.message.reply_text()
        print("Tera Bhai : ",update.message.chat.id)
    else:
        token = "1242765020:AAEqT7bzVMNBI8VuOMvaGzWPkcx9KDmTW3Q"
        bot = telegram.Bot(token=token)
        photo = "/home/noobeboy/python/bot/a.jpg"
        update.message.reply_text("Join our group \n\nhttps://t.me/joinchat/SrXu6xqKbhx7jm90-hPp5Q")
        bot.sendPhoto(update.message.chat.id, open(photo,'rb') )
def main():
    """Start the bot."""
    # Create the Updater and pass it your bot's token.
    # Make sure to set use_context=True to use the new context based callbacks
    # Post version 12 this will no longer be necessary
    updater = Updater("1242765020:AAEqT7bzVMNBI8VuOMvaGzWPkcx9KDmTW3Q", use_context=True)

    # Get the dispatcher to register handlers
    dp = updater.dispatcher

    # on different commands - answer in Telegram
    dp.add_handler(CommandHandler("start", start))
    dp.add_handler(CommandHandler("help", help_command))

    # on noncommand i.e message - echo the message on Telegram
    dp.add_handler(MessageHandler(Filters.text & ~Filters.command, echo))

    # Start the Bot
    updater.start_polling()
    # Run the bot until you press Ctrl-C or the process receives SIGINT,
    # SIGTERM or SIGABRT. This should be used most of the time, since
    # start_polling() is non-blocking and will stop the bot gracefully.
    updater.idle()


if __name__ == '__main__':
    main()
