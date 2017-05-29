set :stage, :staging
set :stage_url, "http://staging.stocksdigital.com"
server "221.121.148.97", user: "stocksdig", roles: %w{web app db}, port: 2929
set :deploy_to, "/home/stocksdig/public_html"
