const quizDB = [
  {
    question: "1. for i in range(10):print(i);   FM:10",
    a: "0 - 10",
    b: "1 - 10",
    c: "1 - 9",
    d: "0 - 9",
    ans: "ans4"
  },
  {
    question: "2. l=[1,8,0];for i in enumerate(l):print(i[1]);FM:10",
    a: "elements of l",
    b: "index of l",
    c: "none",
    d: "both",
    ans: "ans1"
  },
  {
    question: "3. x = ['ab', 'cd']for i in x:i.upper();print(x);   FM:10",
    a: "['ab','cd']",
    b: "['AB','CD']",
    c: "['Ab','Cd']",
    d: "['Ab','cD']",
    ans: "ans1"
  },
  {
    question: "4. i = 10 while True:if i%7 == 0:break;print(i);i += 1;  FM:10",
    a: "10 - 13",
    b: "10 - 12",
    c: "10,11",
    d: "10",
    ans: "ans1"
  },
  {
    question: "5. for j in range(5):j+=1;print(j);  FM:10",
    a: "0 - 4",
    b: "1 - 5",
    c: "Can't say",
    d: "0 - 5",
    ans: "ans2"
  }


];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit = document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

const showscore = document.querySelector('#showscore');

let questionCount = 0;
let score = 0;

const loadQuestion = () => {
  const questionList = quizDB[questionCount];

  question.innerText = questionList.question;

  option1.innerText = questionList.a;
  option2.innerText = questionList.b;
  option3.innerText = questionList.c;
  option4.innerText = questionList.d;

}

loadQuestion();

const getCheckAnswer = () => {
  let answer;

  answers.forEach((curAnsElem) => {
    if(curAnsElem.checked){
      answer = curAnsElem.id;
    }


  });

return answer;
};

submit.addEventListener('click', () => {
  const checkedAnswer = getCheckAnswer();
  console.log(checkedAnswer);

  if(checkedAnswer === quizDB[questionCount].ans){
    score++;
  };
  questionCount++;
  if(questionCount < quizDB.length){
    loadQuestion();
  }else{

    showscore.innerHTML = `
    <h3 class="h">Total Score = ${score*10}/${quizDB.length*10}</h3>
    <button class="btn" onclick="location.reload()" data-inline="true">Try again</button>

    <button class="btn1" data-inline="true"> <a href="Start.php" class="ar">Quit Quiz</a> </button>

    `;
    showscore.classList.remove('scoreArea');

  }
});
