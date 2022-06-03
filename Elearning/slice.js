
const quizDB = [
  {
    question: "1. Str='Rolling stone' which will be the output of Str[0:4]?   FM:10",
    a: "Roll",
    b: "Rolli",
    c: "oll",
    d: "None",
    ans: "ans1"
  },
  {
    question: "2. Str='Rolling stone' what will be the output of Str[9:-1]?   FM:10",
    a: "stone",
    b: "tone",
    c: "ton",
    d: " ",
    ans: "ans3"
  },
  {
    question: "3. S='Hello world!' Which of the following will return 'Hello world'?   FM:10",
    a: "S[::-1]",
    b: "S[1:]",
    c: "S[0:]",
    d: "S[:-1]",
    ans: "ans4"
  },
  {
    question: "4. str1 = 'Welcome' print(str1[:6] + ' PYnative')   FM:10",
    a: "Welcome PYnative",
    b: "Welcom PYnative",
    c: "WelcomPYnative",
    d: "WelcomePYnative",
    ans: "ans2"
  },
  {
    question: "5. str = 'My salary is 7000' output of print(str.isalnum())   FM:10",
    a: "True",
    b: "False",
    c: "Can't say",
    d: "None",
    ans: "ans2"
  },
  {
    question: "6. str = 'Quick brown fox jumps over the lazy dog' reverse string will be  FM:10",
    a: "str[len(str)::-1]",
    b: "str[0:]",
    c: "str[:-1]",
    d: "str[::-2]",
    ans: "ans1"
  },
  {
    question: "7. str = 'Quick brown fox jumps over the lazy dog' str[0:14:2] output will be  FM:10",
    a: "Quickbonf",
    b: "Quikbrownf",
    c: "Qcbwf m",
    d: "Qikbonf",
    ans: "ans4"
  },
  {
    question: "8. i='India' s=ord(i[2]) print(s,i[3:])  FM:10",
    a: "d ia",
    b: "100 i",
    c: "100 ia",
    d: "d i",
    ans: "ans3"
  },
  {
    question: "9. s='Hello! Are you there?' print(s[0:5],s[15:20])  FM:10",
    a: "Hello Are there",
    b: "Hello there",
    c: "Hello Are you there",
    d: "Hello! there",
    ans: "ans2"
  },
  {
    question: "10. s='Hello! Are you there?' print Are you there  FM:10",
    a: "s[6:20]",
    b: "s[1:15]",
    c: "s[6:19]",
    d: "s[5:-1]",
    ans: "ans1"
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
