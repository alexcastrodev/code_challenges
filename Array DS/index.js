const { performance } = require("perf_hooks");

class Perform {
    callback;

    constructor(callback) {
        this.callback = callback;
    }

    perform() {
        var startTime = performance.now();
        this.callback();
        var endTime = performance.now();

        console.log(`Callback took ${endTime - startTime} milliseconds`);
    }
}

const callback = (a) => {
    let localValue = [];
    a.forEach((element) => localValue.unshift(element));
    return localValue;
};

const callback2 = (a) => {
    let localValue = [];
    for (let i = localValue.length - 1; i >= 0; i--) {
        localValue.push(a[i]);
    }
    return localValue;
};

const callback3 = (a) => {
    for (let i = 0; i < Math.floor(a.length / 2); i++) {
        [a[i], a[a.length - 1 - i]] = [a[a.length - 1 - i], a[i]];
    }
    return a;
};

const callback4 = (a) => a.map((e, i, a) => a[a.length - 1 - i]);

const callback5 = (a) => {
    return a.reverse();
};

new Perform(() => callback(new Array(1000).fill(1))).perform(); //Callback took 0.1955839991569519 milliseconds
new Perform(() => callback2(new Array(1000).fill(1))).perform(); //Callback took 0.5136250257492065 milliseconds
new Perform(() => callback3(new Array(1000).fill(1))).perform(); //Callback took 0.196416974067688 milliseconds
new Perform(() => callback4(new Array(1000).fill(1))).perform(); //Callback took 0.0716249942779541 milliseconds

// Winner
new Perform(() => callback5(new Array(1000).fill(1))).perform(); //Callback took 0.06225001811981201 milliseconds
