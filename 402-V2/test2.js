let health = 100;
let maxHealth = 100;
let food = 85;
let maxFood = 100;
let coinCount = 0;
let bombs
let fish;
let spriteImage;
let tile;
let tileWidth = 32;
let coins;
let numCoins = 80;
let isLeft;
let isRight;
let zombies;
let poissons;

function preload() {
  // load image
  spriteImage = loadImage("assets/sprite.png");
  coinImage = loadImage("assets/coins.png");
  singleCoinImage = loadImage("assets/singleCoin.png")
  tile = loadImage("assets/tile.png");
  sharkImage = loadImage("assets/requin.png");
  fishImage = loadImage("assets/poisson1.png"),
  orqueImage = loadImage("assets/orque.png"),



  bg = loadImage("assets/decor2.png");
  bombImage = loadImage("assets/bomb.png");
  poZom = loadImage("assets/poissonZombie.png")
}

function setup() {

  console.log(coinCount )

  isLeft = false;
  isRight = false;

  // create canvas
  // chaque pixel est 4x plus grand
  createCanvas(window.x, window.y);
  allSprites.pixelPerfect = true;
  allSprites.tileSize = tileWidth;

  fish = new Sprite(canvas.x, 3, 1, 1);
  fish.spriteSheet = sharkImage;
  fish.rotationLock = true;

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

  zombies = new Group();
  for(let j=0; j<5; j++){
    let zombie = createSprite(random(5, 50), random(0,30), 1, 1)
    zombie.spriteSheet = poZom;
    zombie.rotationLock = true
    // zombie.collider = "none"
    zombie.scale = 1
    zombie.addAnis({
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
    zombie.changeAni("stand")
    zombies.add(zombie);
  }
  fish.overlapping(zombies, damage)


  bombs = new Group();
  for(let j=0; j<15; j++){
    let bomb = createSprite(random(5,50), random(0, 30), 1, 1)
    bomb.spriteSheet = bombImage; 
    bomb.rotationLock = true
    bomb.collider = "none"
    bomb.scale = 2  
    bomb.addAnis({
      move: {
        w: 1,
        h: 1,
        row: 0,
        frames: 4,
        frameDelay: 50,
      },
    });
    bomb.changeAni("move");
    bombs.add(bomb);
  }
  fish.overlapping(bombs, damage)

  coins = new Group();
  for(let j=0; j<5; j++){
    let coin = createSprite(random(5, 50), random(0,30), 1, 1)
    coin.spriteSheet = coinImage;
    coin.rotationLock = true
    coin.collider = "none"
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
    coins.add(coin);
  }
  fish.overlapping(coins, collect);

  otherFishs = new Group();
  for(let j=0; j<5; j++){
    let otherFish = createSprite(random(5,50), random(0, 30), 1, 1)
    otherFish.spriteSheet = fishImage; 
    otherFish.rotationLock = true
    otherFish.collider = "none"
    otherFish.scale = random(0, 2)
    if(otherFish.spriteSheet = fishImage){
      otherFish.addAnis({
        stand: {
          w: 1,
          h: 1,
          row: 0,
          frames: 4,
          frameDelay: 20,
        }
      });
    }

    otherFish.changeAni("stand")

    let otherOrque = createSprite(random(5,50), random(0, 30), 1, 1)
    otherOrque.spriteSheet = orqueImage; 
    otherOrque.rotationLock = true
    otherOrque.collider = "none"
    otherOrque.scale = random(0, 2)
    if(otherOrque.spriteSheet = orqueImage){
      otherOrque.addAnis({
        stand: {
          w: 1,
          h: 1,
          row: 0,
          frames: 4,
          frameDelay: 20,
        }
      });
    }

    otherOrque.changeAni("stand");

    let otherShark = createSprite(random(5,50), random(0, 30), 1, 1)
    otherShark.spriteSheet = sharkImage; 
    otherShark.rotationLock = true
    otherShark.collider = "none"
    otherShark.scale = random(0, 2)
    if(otherShark.spriteSheet = sharkImage){
      otherShark.addAnis({
        stand: {
          w: 1,
          h: 1,
          row: 0,
          frames: 4,
          frameDelay: 20,
        }
      });
    }

    otherShark.changeAni("stand");
    otherFishs.add(otherFish, otherOrque, otherShark);
  }
  fish.overlapping(otherFishs, eat)



  


}

function collect(fish, coin) {
  coin.x = random(5,50)
  coin.y = random(0,30)
coinCount += 1;
}

function damage(fish, bomb){
  health -= 10;
  bomb.x = random(5,50)
  bomb.y = random(0,30)}

function eat(fish, otherFish){
  if( otherFish.width > fish.width){
    health -= 10;
    otherFish.x = random(5,50)
    otherFish.y = random(0,30)

  }
  else {
    if( fish.scale <= 2) {
      fish.scale += otherFish.scale
    }
    otherFish.x = random(5,50)
    otherFish.y = random(0,0)
    if(health != 100){
      health += 10;
    }
    if(food != 100){
      if(food >= 80){
        food += maxFood - food
      }
      else{
        food += 20
      }
    }
  }
}

function updateHealth(){
  stroke(0);
  strokeWeight(4);
  noFill()
  rect(50, 250, 15 * 2, 100 * 4);
  noStroke()
  fill(255,0,0)
  rect(50, 250, 15 * 2,  map(health, 0, maxHealth, 0, 200) * 2);
}

function updateFood(){
  stroke(0);
  strokeWeight(4);
  noFill()
  rect(100, 250, 15 * 2, 100 * 4);
  noStroke()
  fill(100,255,0)
  rect(100, 250, 15 * 2,  map(food, 0, maxFood, 0, 200) * 2);
}

function draw() {
  background(bg);

  if( food > 0){
    setTimeout('10000', 10000);
    food -= 0.05
  }


  updateFood(maxFood, maxFood);
  updateHealth(health, maxHealth);


  zombies.forEach(zombie => {
    let dir = p5.Vector.sub(fish.position, zombie.position);
    dir.setMag(0.05);
    zombie.velocity = dir;
  });

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

  fish.layer = 2;

  textSize(40)
  fill('yellow')
  text(coinCount, 50, 100)
  image(singleCoinImage, 75, 60, 50, 50);
}
