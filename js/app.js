const path = require('path');
const os = require('os');
const fs = require('fs');
const EventEmitter = require('events');
const emitter = new EventEmitter();
const http = require('http');


const pathObj = path.parse(__filename);
console.log(pathObj);

const totmem = os.totalmem();
const freemem = os.freemem();
console.log(`Total Memory: ${totmem}`);
console.log(`Free Memory: ${freemem}`);

// fs.readdir('./', function (err, files) {
//     if (err) console.log('Error', err);
//     else console.log('Result', files);
// });
console.log('–––––––––––––––––––––––––––––––––');


const Logger = require('./logger');
const logger = new Logger();

logger.on('messageLogged', (arg) => {
	console.log('listener called', arg);
});

logger.log('massage);

console.log('–––––––––––––––––––––––––––––––––');

const server = http.createServer((req, res) => {
	if (req.url === '/') {
		res.write('hello');
		res.end();
	} else {
		console.log(res);
	}
});
server.on('connection', (socket) => {
	console.log('new connection');
})

server.listen(3000);
console.log('listening on port 3000');
