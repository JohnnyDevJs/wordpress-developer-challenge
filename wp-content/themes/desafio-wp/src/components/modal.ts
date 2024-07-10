const modal: HTMLElement | null = document.getElementById('modal')
const openModals: NodeListOf<HTMLButtonElement> = document.querySelectorAll('.open-modal')
const closeModals: NodeListOf<HTMLButtonElement> = document.querySelectorAll('.close-modal')

const firstClasses = ['opacity-1', 'visible']
const secondClasses = ['opacity-0', 'invisible']

if(openModals) {
  openModals.forEach((openModal) => {
    openModal.addEventListener('click', (event: MouseEvent) => {
      event.preventDefault()

      if(modal) {

        modal.classList.add(...firstClasses)
        modal.classList.remove(...secondClasses)
      }

    })
  })
}

if(closeModals) {
  closeModals.forEach((closeModal) => {
    closeModal.addEventListener('click', (event: MouseEvent) => {
      event.preventDefault()

      if(modal) {
        modal.classList.add(...secondClasses)
        modal.classList.remove(...firstClasses)
      }
    })
  })
}
