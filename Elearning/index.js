
const quizDB = [
  {
    question: "Q1: Str='Rolling stone' which will be the output of Str[0:4]?   FM:10",
    a: "Roll",
    b: "Rolli",
    c: "oll",
    d: "None",
    ans: "ans1"
  },
  {
    question: "Q2: Str='Rolling stone' what will be the output of Str[9:-1]?   FM:10",
    a: "stone",
    b: "tone",
    c: "ton",
    d: " ",
    ans: "ans3"
  },
  {
    question: "Q3: S='Hello world!' Which of the following will return 'Hello world'?   FM:10",
    a: "S[::-1]",
    b: "S[1:]",
    c: "S[0:]",
    d: "S[:-1]",
    ans: "ans4"
  },
  {
    question: "Q4: str1 = 'Welcome' print(str1[:6] + ' PYnative')   FM:10",
    a: "Welcome PYnative",
    b: "Welcom PYnative",
    c: "WelcomPYnative",
    d: "WelcomePYnative",
    ans: "ans2"
  },
  {
    question: "Q5: str = 'My salary is 7000';print(str.isalnum())   FM:10",
    a: "True",
    b: "False",
    c: "Can't say",
    d: "None",
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
    <h3>Total Score = ${score*10}/${quizDB.length*10}</h3>
    <button class="btn" onclick="location.reload()">Try again</button>
    `;
    showscore.classList.remove('scoreArea');
  }
});
