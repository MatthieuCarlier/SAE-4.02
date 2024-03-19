let fish;
let spriteImage;
let tile;
let tileWidth = 32;
let cannon;
let coinCount = 0;
let bounceCount = 0;
let coin;
let numCoins = 80;
let isLeft;
let isRight;

let px = 2,
  py = 2;

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function preload() {
  // load image
  spriteImage = loadImage("assets/sprite.png");
  coinImage = loadImage("assets/coins.png");
  tile = loadImage("assets/tile.png")
  fishImage = loadImage("assets/poisson1.png")
  sharkImage = loadImage("assets/requin.png")
}

function setup() {

  isLeft = false;
  isRight = false;

  // create canvas
  // chaque pixel est 4x plus grand
  createCanvas(256, 128, "pixelated x4");
  allSprites.pixelPerfect = true;
  allSprites.tileSize = tileWidth;


  // create fish x, y, width, height
  // 32x32 par tile

  cannon = new Sprite(1, 3.5, 1, 1, 'static');
  cannon.spriteSheet = coinImage;


  // player.debug = true;
  fish = new Sprite(3, 3, 1, 1);
  fish.spriteSheet = fishImage;
  fish.rotationLock = true;
  fish.bounciness = 0.5;


  coin = new Sprite(5, 1, 1, 1);
  coin.spriteSheet = coinImage;
  coin.rotationLock = true;
  coin.bounciness = 0.5;
  //coin.scale = 0.5;

  coin.addAnis({
    spin: {
      w: 1,
      h: 1,
      row: 0,
      frames: 5,
      frameDelay: 10,
    },
  });
  coin.changeAni("spin");
  coin.rotationLock = true;




  floor = new Sprite(0, 4, 1, 1);
  floor.w = 40
	floor.collider = 'static';

  floor.collision = true

  world.gravity.y = 9.81  

  fish.addAnis({
    stand: {
      w: 1,
      h: 1,
      row: 0,
      frames: 4,
      frameDelay: 20,
    },
    down: {
      w: 1,
      h: 1,
      row: 5,
      frames: 4,
      frameDelay: 20,
    },
    right: {
      w: 1,
      h: 1,
      row: 0,
      frames: 4,
      frameDelay: 20,
    },
    up: {
      w: 1,
      h: 1,
      row: 4,
      frames: 4,
      frameDelay: 20,
    },
    left: {
      w: 1,
      h: 1,
      row: 1,
      frames: 4,
      frameDelay: 20,
    },
  });

  fish.changeAni("stand");    
}

function draw() {
  push();
  translate(scroll, 0)

  background(100, 100, 225);
  if (kb.pressing("arrowRight") || kb.pressing("d")) {
    fish.changeAni("right");
    fish.move(0.1, "right", 0.1);
  } else if (kb.pressing("arrowLeft")) {
    fish.changeAni("left"); 
    fish.move(0.1, "left", 0.1);
  } else if (kb.pressing("arrowUp")) {
    fish.changeAni("up");
    fish.move(0.1, "up", 0.1);
  } else if (kb.pressing("arrowDown")) {
    fish.changeAni("down");
    fish.move(0.1, "down", 0.1);
  } else {
    fish.changeAni("stand");
  }

  if (fish.overlaps(coin)){
    coin.remove()
    coinCount += 1
    document.getElementById("compteur").innerHTML = coinCount;


  }


  
  if (fish.x > width / tileWidth) {
    fish.x = 0;
  }

  if (fish.x < 0) {
    fish.x = width / tileWidth;
  }

  if (fish.y > height / tileWidth) {
    fish.y = 0;
  }
  if (fish.y < 0) {
    fish.y = height / tileWidth;
  }

    if (fish.overlaps(cannon)){

      cannon.collision = true
      fish.position = fish.previousPosition;
      
      bounceCount = 0;
      fish.velocity.y = 0.3
      fish.velocity.x = 0.2


    } 





  if (fish.collide(floor)){
    bounceCount += 1;
    fish.velocity.x = 0.05
    if (bounceCount >=  5){
      fish.velocity.x = 0;
    }
  }
    coin.layer = 0; 
    cannon.layer = 1;
    fish.layer = 2;
}

function mousePressed() {
  px = mouseX / tileWidth;
  py = mouseY / tileWidth;

}

