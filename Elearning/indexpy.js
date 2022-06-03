const quizDB = [
  {
    question: "1. Index number starts from -   FM:10",
    a: "0",
    b: "1",
    c: "2",
    d: "None",
    ans: "ans1"
  },
  {
   question: "2. Index number ends with -   FM:10",
   a: "length of string",
   b: "-1",
   c: "None",
   d: "Can't say",
   ans: "ans2"
 },
 {
   question: "3. s='small boy' index of '' is -   FM:10",
   a: "5",
   b: "8",
   c: "4",
   d: "6",
   ans: "ans1"
 },
 {
    question: "4. l=[1,2,3,4,5,6,7,8,9] last index is -   FM:10",
    a: "9-1",
    b: "len(l)-1",
    c: "-1",
    d: "All",
    ans: "ans4"
  },
  {
   question: "5. l=['Are', 'you', 'there']; print(l[2][1]);   FM:10",
   a: "u",
   b: "h",
   c: "y",
   d: "t",
   ans: "ans2"
 },
 {
   question: "6. l=['Are', 'you', 'there']; print(len(l[2]));  FM:10",
   a: "3",
   b: "5",
   c: "7",
   d: "10",
   ans: "ans2"
 },
  {
   question: "7. l='Hello user'; print(l[0::]);  FM:10",
   a: "Hello user",
   b: "H",
   c: "Hello",
   d: "user Hello",
   ans: "ans1"
 },
 {
   question: "8. l='Hello user'; print(l[6:11],l[0:5]);  FM:10",
   a: "use Hell",
   b: "ser ello",
   c: "user Hello",
   d: "None",
   ans: "ans3"
 },
 {
   question: "9. l=[1,2,3,'I','WE','YOU'] type(l[5]) is -  FM:10",
   a: "str",
   b: "float",
   c: "list",
   d: "int",
   ans: "ans1"
 },
 {
   question: "10. l=[1,2,3,'I','WE','YOU']; print(type(l));  FM:10",
   a: "<class 'int'>",
   b: "<class 'flost'>",
   c: "<class 'tuple'>",
   d: "<class 'list'>",
   ans: "ans4"
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
