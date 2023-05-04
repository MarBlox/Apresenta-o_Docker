from flask import Flask
import redis

app = Flask(__name__)
r = redis.Redis(host='redis', port=6379)

@app.route('/')
def Ta_Feito():
    r.incr('hits')
    count = r.get('hits').decode('utf-8')
    return f'Ta funcionando prof ja atualizou {count} vezes.'

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)



