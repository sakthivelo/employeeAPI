pipeline{
agent any
parameters {
  choice choices: ['DEV','STAGE','PROD'], description: 'Choose anyone environment', name: 'ENV'
  password defaultValue: '123ABC', description: 'Password key', name: 'API_KEY'
  string defaultValue: 'This is the changelog', description: 'This is the changelog.', name: 'CHANGELOG'
}
stages{
	stage("Test"){
		when {
			expression {params.ENV == 'STAGE'}
		}
		steps{
			echo "Test stage..."
		}
	}
	stage("Deploy"){
		when{
			expression {params.ENV == 'PROD'}
		}
		steps{
			echo "Deploying..."
		}
	}
	stage("Report"){
		steps{
		    script{
			echo "This stage generates report"
			archiveArtifacts artifacts: '*.txt', followSymlinks: false,
			allowEmptyArchive: true,
                   	fingerprint: true,
                   	onlyIfSuccessful: true
		    }
		}
	}
}
}
