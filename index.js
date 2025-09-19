function FormCreator() {
    const options = {
        showLogicTab: true
    };

    const creator = new SurveyCreator.SurveyCreator(options);

    return (
        <SurveyCreator.SurveyCreatorComponent creator={creator} />
    )
}
