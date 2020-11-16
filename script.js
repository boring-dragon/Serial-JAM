const SerialPort = require('serialport');
const Readline = require('@serialport/parser-readline');

serialPort = process.argv.slice(2)[0];
baudRate = parseInt(process.argv.slice(3)[0]);
delimiter = process.argv.slice(4)[0];

const port = new SerialPort(serialPort, { baudRate: baudRate });
const parser = port.pipe(new Readline({ delimiter: delimiter }));

// Read the port data
port.on("open", () => {
  console.log('serial port open');
});
parser.on('data', data =>{
  console.log(data);
});