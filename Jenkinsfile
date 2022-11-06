pipeline {
	agent any
	stages {
		stage('Checkout SCM') {
			steps {
				//git '/home/3X03'
				sh 'cd /home/3X03 && git status'
			}
		}

		stage('OWASP DependencyCheck') {
			steps {
				dependencyCheck additionalArguments: '--format HTML --format XML', odcInstallation: 'Default'
			}
		}
	}	
	post {
		success {
			dependencyCheckPublisher pattern: 'dependency-check-report.xml'
		}
	}
}