set :stage, :staging
set :stage_url, "http://www.stocksdigital.com"
server "221.121.154.177", user: "stocksdig", roles: %w{web app db}, port: 2929
set :deploy_to, "/home/stocksdig/public_html"
