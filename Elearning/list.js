const quizDB = [
  {
    question: "1. list1=[1,'India',9.4,'a'] for i in range(list1): print(i,end=',')   FM:10",
    a: "0,1,2,3,",
    b: "1,India,9.4,a,",
    c: "TypeError",
    d: "None",
    ans: "ans3"
  },
  {
    question: "2. import random; li=[]; n=random.randint(0,10); for i in range(n): li.append(i); print(li); FM:10",
    a: "list of random numbers",
    b: "[0,1,2,3,4,5,6,7,8,9,10]",
    c: "[1,2,3,4,5,6,7,8,9,10]",
    d: "[10]",
    ans: "ans1"
  },
  {
    question: "3. l1=[1,2]; l2=[3,4]; print(l1+l2); FM:10",
    a: "[1,2]+[3,4]",
    b: "[1,2+3,4]",
    c: "[1,2][3,4]",
    d: "[1,2,3,4]",
    ans: "ans4"
  },
  {
    question: "4. Which of the following would give an error?   FM:10",
    a: "list1=[]",
    b: "list1=[]*2",
    c: "list1=[1,4,8]",
    d: "None",
    ans: "ans4"
  },
  {
    question: "5. list1=[9,99,999,9999]; print(list1[::-1]);   FM:10",
    a: "[9999,999,99,9]",
    b: "[999,99,9]",
    c: "[9999,999,99]",
    d: "None",
    ans: "ans1"
  },
  {
    question: "6. l=['float','int','Char']; print(sorted(l));  FM:10",
    a: "['Char', 'float', 'int']",
    b: "[float','Char','int']",
    c: "['int', 'float', 'Char']",
    d: "TypeError",
    ans: "ans1"
  },
  {
    question: "7. l1=['B','M','C']; print(sorted(l2));  FM:10",
    a: "['B','C','M']",
    b: "TypeError",
    c: "[66,67,77]",
    d: "None",
    ans: "ans1"
  },
  {
    question: "8. list1=[-9,20,9.7,0,1]; list1.pop(2); print(list1);  FM:10",
    a: "[-9,20,9.7,0]",
    b: "[9.7,0,1]",
    c: "[-9,20,0,1]",
    d: "[20,9.7,0,1]",
    ans: "ans3"
  },
  {
    question: "9. list1=[-9,20,9.7,0,1]; list1.remove(20); print(round(sum(list1)));  FM:10",
    a: "1.6",
    b: "1.7",
    c: "2",
    d: "1.6999999999999993",
    ans: "ans3"
  },
  {
    question: "10.  list1=[-9,20,9.7,0,1]; print(min(list1),',',max(list1)); FM:10",
    a: "-9,20",
    b: "0,20",
    c: "20,0",
    d: "20,-9",
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
